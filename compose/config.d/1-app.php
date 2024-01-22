<?php

$site_name        = 'Mapa Cultural de Santa Catarina';
$site_description = 'O Mapa Cultural de Santa Catarina é a plataforma livre, gratuita e colaborativa de mapeamento do Estado de Santa Catarina sobre cenário cultural catarinense. Ficou mais fácil se programar para conhecer as opções culturais que as cidades catarinenses oferecem: shows musicais, espetáculos teatrais, sessões de cinema, saraus, entre outras. Além de conferir a agenda de eventos, você também pode colaborar na gestão da cultura do estado: basta criar seu perfil de agente cultural. A partir deste cadastro, fica mais fácil participar dos editais e programas da Secretaria e também divulgar seus eventos, espaços ou projetos.';

return array_merge($config,
    [
        'app.useAssetsUrlCache' => false,
        'app.siteName'          => \MapasCulturais\i::__($site_name),
        'app.siteDescription'   => \MapasCulturais\i::__($site_description),

        /* Habilitar configurações importantes da aplicação: [development, staging, production] */ 
        'app.mode'                     => 'production', // define o modo de operação: 'develop' ou 'production'
        'app.enabled.seals'            => true,         // habilita o uso de selos
        'app.enabled.apps'             => false,        // habilita o uso de aplicativos externos - via API
        'api.accessControlAllowOrigin' => '*',
        'app.offline'                  => false,
        'app.offlineUrl'               => '/offline',
        'app.offlineBypassFunction'    => null,
        'app.log.hook'                 => true,
        #'app.log.query'                => true,
        #'app.log.requestData'          => true,
        #'app.log.translations'         => true,
        #'app.log.apiCache'             => true,
        #'app.log.path'                 => '/dados/mapas/logs/',
    ]
);
