<?php
namespace MapasCulturais;

use MapasCulturais\Traits;

/**
 * @property-read array $config array de configuração
 * @package MapasCulturais
 */
abstract class Module {
    use Traits\MagicGetter,
        Traits\MagicSetter,
        Traits\RegisterFunctions;
    
    protected $_config;
    
    abstract function _init();
    
    abstract function register();

    static function isPlugin() {
        return false;
    }
    
    function __construct(array $config = []) {
        $this->_config = $config;
        
        $app = App::i();
        $active_theme = $app->view;
        $class = get_called_class();

        $priority = $class::isPlugin() ? 50 : 200;
        
        $app->hook('mapasculturais.init', function() use($class, $active_theme){
            $reflaction = new \ReflectionClass($class);
        
            while($reflaction->getName() != __CLASS__){
                $dir = dirname($reflaction->getFileName());
    
                if($dir != __DIR__) {
                    $active_theme->addPath($dir);
                }
                
                $reflaction = $reflaction->getParentClass();
            }
        }, $priority);
        

        // include Module Entities path to doctrine path
        $path = self::getPath('Entities');
        if(is_dir($path)) {
            $driver = $app->em->getConfiguration()->getMetadataDriverImpl();
            $driver->addPaths([$path]);
        }
        
        $app->applyHookBoundTo($this, "module({$class}).init:before");
        $this->_init();
        $app->applyHookBoundTo($this, "module({$class}).init:after");
    }
    
    function getConfig(){
        return $this->_config;
    }

    static function getPath($subfolder = '') {
        $app = App::i();

        $called_class = get_called_class();

        $cache_key = "{$called_class}:path";
        if ($app->cache->contains($cache_key)) {
            $path = $app->cache->fetch($cache_key);
        } else {
            $reflector = new \ReflectionClass($called_class);
            $path = dirname($reflector->getFileName()) . '/';

            $app->cache->save($cache_key, $path);
        }

        return $subfolder ? "{$path}{$subfolder}/" : $path;
    }
}