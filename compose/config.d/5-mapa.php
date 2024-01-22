<?php

/* Definição das coordenadas de centralização do mapa quando em modo consulta */
$map_latitude  = '-19.8847596';
$map_longitude = '-43.8262224' ;
$map_zoom      = '13.75';

return array_merge($config,
    [
        /* Configurações do Mapa e GeoDivisão */
        'maps.includeGoogleLayers' => true,
        'maps.center'              => array($map_latitude, $map_longitude),
        'maps.zoom.default'        => $map_zoom,
    ]
);
