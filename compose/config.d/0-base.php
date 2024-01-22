<?php

$base_domain   = @$_SERVER['HTTP_HOST'];
$base_url      = 'http://' . $base_domain . '/';
date_default_timezone_set('America/SaoPaulo');

return array_merge($config,
    [
        /* to setup Saas Subsite theme */
/*      'namespaces' => [
                        'MapasCulturais\Themes' => THEMES_PATH,
                        'FCC'                   => THEMES_PATH . '/Santa_Catarina/',
                        'Subsite'               => THEMES_PATH . '/Subsite/'
        ],
*/
//        'themes.active' => 'Santa_Catarina',
        'base.assetUrl' => $base_url . 'assets/',
        'base.url'      => $base_url,
    ]
);
