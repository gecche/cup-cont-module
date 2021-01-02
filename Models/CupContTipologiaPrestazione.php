<?php

namespace Modules\CupCont\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for cup_cont_tipologie_prestazioni table.
 */
class CupContTipologiaPrestazione extends Breeze
{


//    use ModelWithUploadsTrait;

    protected $table = 'cup_cont_tipologie_prestazioni';

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

			'iva' => [self::BELONGS_TO, 'App\Models\CupContIva', 'table' => 'cup_cont_iva', 'foreignKey' => 'iva_id'],


//        'belongsto' => array(self::BELONGS_TO, CupContTipologiaPrestazione::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, CupContTipologiaPrestazione::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, CupContTipologiaPrestazione::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['codice', 'descrizione'];
     //['id','descrizione'];

    public $defaultOrderColumns = ['descrizione' => 'ASC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['codice', 'descrizione'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
