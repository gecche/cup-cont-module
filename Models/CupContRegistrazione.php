<?php

namespace Modules\CupCont\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for cup_cont_registrazioni table.
 */
class CupContRegistrazione extends Breeze
{

//    use ModelWithUploadsTrait;

    protected $table = 'cup_cont_registrazioni';

    //protected $fillable = [];

    public $timestamps = true;
    public $ownerships = true;


    protected $guarded = [
        'id',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public $appends = [

    ];


    public static $relationsData = [

        'organizzazione' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagAnagrafica::class, 'table' => 'cup_anag_anagrafiche', 'foreignKey' => 'organizzazione_id'],
        'sede' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagSede::class, 'table' => 'cup_anag_sedi', 'foreignKey' => 'sede_id'],

        'documenti' => [self::BELONGS_TO_MANY, 'related' => \App\Models\CupContRegistrazione::class,
            'table' => 'cup_cont_documenti_documenti',
            'pivotFields' => [],
            'foreignPivotKey' => 'registrazione_id', 'relatedPivotKey' => 'documento_id'],

//        'belongsto' => array(self::BELONGS_TO, CupContRegistrazione::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, CupContRegistrazione::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, CupContRegistrazione::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['progressivo'];
    //['id','descrizione'];

    public $defaultOrderColumns = ['organizzazione_id' => 'ASC', 'anno' => 'ASC', 'progressivo' => 'ASC',];
    //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['progressivo'];
    //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
