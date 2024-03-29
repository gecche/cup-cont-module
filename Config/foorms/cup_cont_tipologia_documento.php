<?php


/*
 * 'model' => <MODELNAME>
 * <FORMNAME> =>  [ //nome del form da route
 *      type => <FORMTYPE>, //tipo di form (opzionale se non c'è viene utilizzato il nome)
 *              //search, list, edit, insert, view, csv, pdf
 *      fields => [ //i campi del modello principale
 *          <FIELDNAME> => [
 *              'default' => <DEFAULTVALUE> //valore di default del campo (null se non presente)
 *              'options' => array|relation:<RELATIONNAME>:<COLUMNS>|dboptions|boolean
 *                          //le opzioni possibili di un campo, prese da un array associativo,
 *                              da una relazione (gli id del modello correlato
 *                              con <COLUMNS> serie di campi separati da virgola da inviare,
 *                              dal database (enum ecc...)
 *                              booleano
 *              'nulloption' => true|false|onchoice //onchoice indica che l'opzione nullable è presente solo se i valori
 *                                  delle options sono più di uno; default: true,
 *          ]
 *      ],
 *      relations => [ // le relazioni del modello principale
 *          <RELATIONNAME> => [
 *              fields => [ //i campi del modello principale
 *                  <FIELDNAME> => [
 *                      'default' => <DEFAULTVALUE> //valore di default del campo (null se non presente)
 *                      'options' => array|relation:<RELATIONNAME>|dboptions|boolean
 *                          //le opzioni possibili di un campo, prese da un array associativo,
 *                              da una relazione (gli id del modello correlato,
 *                              dal database (enum ecc...)
 *                              booleano
 *                      'nulloption' => true|false|onchoice //onchoice indica che l'opzione nullable è presente solo se i valori
 *                                    delle options sono più di uno; default: true,
 *                  ]
 *              ],
 *              savetype => [ //metodo di salvataggio della relazione
 *                              (in caso di edit/insert) da definire meglio
 *              ]
 *          ]
 *      ],
 *      params => [ // altri parametri opzionali
 *
 *      ],
 * ]
 */

return [

    'view' => [
        'fields' => [
            "codice" => [

            ],
            "nome" => [

            ],
            "macrotipo" => [

            ],
            "tipo_fatt_el" => [

            ]
        ],
    ],
    'search' => [
        'fields' => [
            "codice" => [
                "operator" => "like"
            ],
            "nome" => [
                "operator" => "like"
            ],
            "macrotipo" => [
                "operator" => "like",
                "options" => "dboptions"
            ],
            "tipo_fatt_el" => [
                "operator" => "like"
            ]
        ],
    ],
    'list' => [

        'allowed_actions' => [
            'csv-export' => true,
        ],

        'actions' => [
            'set' => [
                'allowed_fields' => [
//                    'soggetti_residenti',
                ],
            ],
            'csv-export' => [
                'default' => [
                    'blacklist' => [
//                        'password'
                    ],
                    'whitelist' => [
                        "codice",
                        "nome",
                        "macrotipo",
                    ],
                    'fieldsParams' => [
//                        "istituto|comunenome" => [
//                            'header' => 'Istituto - comune (nome)',
//                            'item' => 'istituto|T_COMUNE_ID',
//                        ],
                    ],
                    'separator' => ';',
                    'endline' => "\n",
                    'headers' => 'translate',
                    'decimalFrom' => '.',
                    'decimalTo' => false,
                ],
            ]

        ],

        'dependencies' => [
            'search' => 'search',
        ],

        'pagination' => [
            'per_page' => 20,
            'pagination_steps' => [10, 20, 50],
        ],

        'fields' => [
            "codice" => [

            ],
            "nome" => [

            ],
            "macrotipo" => [

            ],
            "tipo_fatt_el" => [

            ]
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],
    'edit' => [
        'fields' => [
            'id' => [

            ],
            "codice" => [

            ],
            "nome" => [

            ],
            "macrotipo" => [
                'options' => 'dboptions',
            ],
            "tipo_fatt_el" => [
                'options' => 'method',
            ]
        ],
        'relations' => [

        ],
        'params' => [

        ],
    ],
//    'insert' => [
//
//    ],

];
