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
    "tipo" => [

    ],
    "organizzazione_id" => [

    ],
    "sedeoperativa_id" => [

    ],
    "anno" => [

    ],
    "tipodocumento_id" => [

    ],
    "ultimo_numero" => [

    ],
    "ultimo_progressivo_invio" => [

    ]
],
    ],
    'search' => [
        'fields' => [
    "tipo" => [
        "operator" => "like",
        "options" => "dboptions"
    ],
    "organizzazione_id" => [
        "operator" => "like",
        "options" => "relation:cup_anag_anagrafiche"
    ],
    "sedeoperativa_id" => [
        "operator" => "like",
        "options" => "relation:cup_anag_sedi"
    ],
    "anno" => [

    ],
    "tipodocumento_id" => [
        "operator" => "like",
        "options" => "relation:cup_cont_tipologie_documenti"
    ],
    "ultimo_numero" => [
        "operator" => "like"
    ],
    "ultimo_progressivo_invio" => [
        "operator" => "like"
    ]
],
    ],
    'list' => [

        'dependencies' => [
            'search' => 'search',
        ],

        'pagination' => [
            'per_page' => 20,
            'pagination_steps' => [10,20,50],
        ],

        'fields' => [
    "tipo" => [

    ],
    "organizzazione_id" => [

    ],
    "sedeoperativa_id" => [

    ],
    "anno" => [

    ],
    "tipodocumento_id" => [

    ],
    "ultimo_numero" => [

    ],
    "ultimo_progressivo_invio" => [

    ]
],
        'relations' => [
    "organizzazione" => [
        "fields" => [

        ]
    ],
    "sede" => [
        "fields" => [

        ]
    ],
    "tipodocumento" => [
        "fields" => [

        ]
    ]
],
        'params' => [

        ],
    ],
    'edit' => [
        'fields' => [
    "tipo" => [

    ],
    "organizzazione_id" => [

    ],
    "sedeoperativa_id" => [

    ],
    "anno" => [

    ],
    "tipodocumento_id" => [

    ],
    "ultimo_numero" => [

    ],
    "ultimo_progressivo_invio" => [

    ]
],
        'relations' => [
    "organizzazione" => [
        "fields" => [

        ],
        "savetype" => [

        ]
    ],
    "sede" => [
        "fields" => [

        ],
        "savetype" => [

        ]
    ],
    "tipodocumento" => [
        "fields" => [

        ],
        "savetype" => [

        ]
    ]
],
        'params' => [

        ],
    ],
//    'insert' => [
//
//    ],

];
