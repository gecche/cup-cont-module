<?php

namespace Modules\CupCont\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for cup_cont_prestazioni table.
 */
class CupContPrestazione extends Breeze
{

//    use ModelWithUploadsTrait;

    protected $table = 'cup_cont_prestazioni';

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
        'anagrafica' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagAnagrafica::class, 'table' => 'cup_anag_anagrafiche', 'foreignKey' => 'anagrafica_id'],
        'sede' => [self::BELONGS_TO, 'related' => \App\Models\CupAnagSede::class, 'table' => 'cup_anag_sedi', 'foreignKey' => 'sede_id'],
        'tipologia' => [self::BELONGS_TO, 'related' => \App\Models\CupContTipologiaPrestazione::class, 'table' => 'cup_cont_tipologie_prestazioni', 'foreignKey' => 'tipologia_id'],
        'iva' => [self::BELONGS_TO, 'related' => \App\Models\CupContIva::class, 'table' => 'cup_cont_iva', 'foreignKey' => 'iva_id'],


//        'belongsto' => array(self::BELONGS_TO, CupContPrestazione::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, CupContPrestazione::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, CupContPrestazione::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['numero'];
    //['id','descrizione'];

    public $defaultOrderColumns = ['organizzazione_id' => 'ASC', 'anno' => 'DESC', 'numero' => 'DESC',];
    //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['numero'];
    //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
