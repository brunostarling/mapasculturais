<?php

return [
    'plugins' => [
        'EvaluationMethodTechnical'   => ['namespace' => 'EvaluationMethodTechnical'],
        'EvaluationMethodSimple'      => ['namespace' => 'EvaluationMethodSimple'],
        'EvaluationMethodDocumentary' => ['namespace' => 'EvaluationMethodDocumentary'],

        'MultipleLocalAuth'           => [ 'namespace' => 'MultipleLocalAuth' ],

        'AldirBlanc' => [
            'namespace' => 'AldirBlanc',
            'config' => [
                    'project_id'                       => <id_projeto_pai>,                         // projeto pai da LAB
                    'logotipo_central'                 => env('AB_LOGOTIPO_CENTRAL',''),            // caminho URL do arquivo da imagem
                    'logotipo_instituicao'             => env('AB_LOGOTIPO_INSTITUICAO',''),        // caminho URL do arquivo de imagem
//                  'link_suporte'                     => env('AB_LINK_SUPORTE',null),              // link para a página de suporte
                    'link_suporte'                     => env('AB_LINK_SUPORTE','http://www.google.com'),              // link
                    'privacidade_termos_condicoes'     => env('AB_PRIVACIDADE_TERMOS',null),        // caminho URL para o arquivo
                    'inciso1_enabled'                  => env('AB_INCISO1_ENABLE',false),
                    'inciso2_enabled'                  => env('AB_INCISO2_ENABLE',false),
                    'msg_inciso1_disabled'             => env('AB_INCISO1_DISABLE_MESSAGE','Em breve. Aguarde!'),
                    'msg_inciso2_disabled'             => env('AB_INCISO2_DISABLE_MESSAGE','A solicitação deste benefício será lançada em breve. Acompanhe a divulgação pelas instituições responsáveis pela gestão da cultura em seu município!'),
                    'inciso1_opportunity_id'           => <id_oportunidade_Inc_I>,
                    'inciso2_opportunity_ids'          => [
                                            "<Cidade-1>" => <id-oportunidade-x>,
                                            "<Cidade-2>" => <id-oportunidade-y>,
                        ],
                    'inciso1_limite'                   => env('AB_INCISO1_LIMITE',1),               // quantidade de inscrições por agente
                    'inciso2_limite'                   => env('AB_INCISO2_LIMITE',1),               // quantidade de inscrições por agente
                    'inciso2_categories'               => [
                                'espaco-formalizado'       => 'BENEFICIÁRIO COM CNPJ E ESPAÇO FÍSICO',
                                'espaco-nao-formalizado'   => 'BENEFICIÁRIO COM CPF E ESPAÇO FÍSICO',
                                'coletivo-formalizado'     => 'BENEFICIÁRIO COM CNPJ E SEM ESPAÇO FÍSICO',
                                'coletivo-nao-formalizado' => 'BENEFICIÁRIO COM CPF E SEM ESPAÇO FÍSICO'
                        ],
                    'inciso1' => [
                               'registrationFrom' => '2020-08-19',
                                'registrationTo'   => '2025-01-31',
                                'shortDescription' => 'Descrição pequena localizada nas configs',
                                'name'             => 'Nome localizada nas configs 24/08-2227',
                                'owner'            => 1,                                            // <agent-ID> da oportunidade automatica
                                'avatar'           => 'avatar-aldirblanc.jpg',                      // caminho URL do arquivo de imagem
                                //'seal'             => 2,
                                'status'           => 0             // 0=>rascunho; 1=>publicado
                        ],
                    'inciso2_default' => [
                                'registrationFrom' => '2020-08-20',
                                'registrationTo'   => '2030-08-20',
                                'shortDescription' => 'descrição aqui DEFAULT',
                                //'name'             => 'Oportunidade DEFAULT',
                                'owner'            => 1,                                            // <agent-ID> default das oportunidades e sub-projetos automaticos
                                'avatar'           => 'avatar-aldirblanc.jpg',                      // caminho URL do arquivo de imagem
                                //'seal'             => 1,  // null para não usar
                                'status'           => 0             // 0=>rascunho; 1=>publicado
                        ],
                    'inciso2' => [
                           [
                                     'city'             => 'Cidade30'         // os campos faltantes ele pega do DEFAULT
                           ],
                           [
                                     'city'             => 'Cidade31',
                                     //'registrationFrom' => 2020-09-01,      // se não definido assume o valor de default
                                     //'registrationTo'   => 2030-09-01,
                                     //'shortDescription' => 'descrição aqui',
                                     //'name'             => 'Oportunidade Cidade1',
                                     //'owner'            => 1,                                            // <agent-ID> do gestor municipal das oportunidade e sub-projeto gerado
                                     //'avatar'           => 'avatar-aldirblanc.jpg',
                                     //'seal'             => 2,
                                     //'status'           => 0        // 0=>rascunho; 1=>publicado
                           ],
                           [
                                     'city'             => 'Cidade32',
                                     'registrationFrom' => '2020-08-19',
                                     'registrationTo'   => '2030-08-19',
                                     'shortDescription' => 'descrição aqui Cidade2',
                                     'name'             => 'Oportunidade Cidade32',
                                     'owner'            => 1,
                                     'avatar'           => 'avatar-aldirblanc.jpg',
                                     //'seal'             => 2,
                                     'status'           => 0  // 0=>rascunho; 1=>publicado
                           ],
                           [
                                     'city'             => 'Cidade33',
                                     //'registrationFrom' => '2020-08-19',
                                     //'registrationTo'   => '2030-08-19',
                                     //'shortDescription' => 'descrição aqui Cidade3',
                                     //'name'             => 'Oportunidade Cidade3',
                                     //'owner'            => 1,
                                     //'avatar'           => 'avatar-aldirblanc.jpg',
                                     //'seal'             => 2,
                                     //'status'           => 0        // 0=>rascunho; 1=>publicado
                           ]
                    ],
                ]
 
            ],
        ]
    ]
];
