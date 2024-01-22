<?php

return array_merge($config,
    [
        /* Doctrine configurations */
        'doctrine.isDev'    => false,
        'doctrine.database' => 
            [
                'dbname'    => 'mapas',
                'user'      => 'mapas',
                'password'  => 'mapas',
                'host'      => 'db',
                'port'      => '5432',
            ]
     ]
);
