<?php

return [
    //'auth.provider' => 'Fake',

    'auth.provider' => '\MultipleLocalAuth\Provider',
    'auth.config'   =>
        [
            'salt' => 'LT_SECURITY_SALT_SECURITY_SALT_SECURITY_SALT_SECURITY_SALT_SECU',
            'timeout' => '24 hours',
            'enableLoginByCPF' => true,
            'passwordMustHaveCapitalLetters' => true,
            'passwordMustHaveLowercaseLetters' => true,
            'passwordMustHaveSpecialCharacters' => true,
            'passwordMustHaveNumbers' => true,
            'minimumPasswordLength' => 6,
            'google-recaptcha-secret' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',
            'google-recaptcha-sitekey' => '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'sessionTime' => 7200,              // int , tempo da sessao do usuario em segundos
            'numberloginAttemp' => '5',         // tentativas de login antes de bloquear o usuario por X minutos
            'timeBlockedloginAttemp' => '900',  // tempo de bloqueio do usuario em segundos
            'strategies' =>
                [
            //      'Facebook' => [
            //              'app_id' => 'SUA_APP_ID',
            //             'app_secret' => 'SUA_APP_SECRET',
            //             'scope' => 'email'
            //      ],
            //         'LinkedIn' => [
            //             'api_key' => 'SUA_API_KEY',
            //             'secret_key' => 'SUA_SECRET_KEY',
            //             'redirect_uri' => '/autenticacao/linkedin/oauth2callback',
            //             'scope' => 'r_emailaddress'
            //         ],
            //         'Google' => [
            //             'client_id' => 'SEU_CLIENT_ID',
            //             'client_secret' => 'SEU_CLIENT_SECRET',
            //             'redirect_uri' => '/autenticacao/google/oauth2callback',
            //             'scope' => 'email'
            //         ],
                    'Twitter' =>
                        [
                            'app_id' => 'SUA_APP_ID',
                            'app_secret' => 'SUA_APP_SECRET',
                        ]
      ]
  ]

    // 'auth.provider' => '\MultipleLocalAuth\Provider',
    // 'auth.config' => [
    //     'salt' => env('AUTH_SALT', null),
    //     'timeout' => '24 hours',
    //     'strategies' => [
    //         'Facebook' => [
    //             'app_id' => env('AUTH_FACEBOOK_APP_ID', null),
    //             'app_secret' => env('AUTH_FACEBOOK_APP_SECRET', null),
    //             'scope' => env('AUTH_FACEBOOK_SCOPE', 'email'),
    //         ],
    //         'LinkedIn' => [
    //             'api_key' => env('AUTH_LINKEDIN_API_KEY', null),
    //             'secret_key' => env('AUTH_LINKEDIN_SECRET_KEY', null),
    //             'redirect_uri' => '/autenticacao/linkedin/oauth2callback',
    //             'scope' => env('AUTH_LINKEDIN_SCOPE', 'r_emailaddress')
    //         ],
    //         'Google' => [
    //             'client_id' => env('AUTH_GOOGLE_CLIENT_ID', null),
    //             'client_secret' => env('AUTH_GOOGLE_CLIENT_SECRET', null),
    //             'redirect_uri' => '/autenticacao/google/oauth2callback',
    //             'scope' => env('AUTH_GOOGLE_SCOPE', 'email'),
    //         ],
    //         'Twitter' => [
    //             'app_id' => env('AUTH_TWITTER_APP_ID', null),
    //             'app_secret' => env('AUTH_TWITTER_APP_SECRET', null),
    //         ],
    //     ]
    // ]
];
