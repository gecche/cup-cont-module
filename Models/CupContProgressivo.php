<?php

namespace Modules\CupCont\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for cup_cont_progressivi table.
 */
class CupContProgressivo extends Breeze
{


//    use ModelWithUploadsTrait;

    protected $table = 'cup_cont_progressivi';

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

			'organizzazione' => [self::BELONGS_TO, 'App\Models\CupAnagAnagrafica', 'table' => 'cup_anag_anagrafiche', 'foreignKey' => 'organizzazione_id'],
			'sede' => [self::BELONGS_TO, 'App\Models\CupAnagSede', 'table' => 'cup_anag_sedi', 'foreignKey' => 'sede_id'],
			'tipodocumento' => [self::BELONGS_TO, 'App\Models\CupContTipologiaDocumento', 'table' => 'cup_cont_tipologie_documenti', 'foreignKey' => 'tipodocumento_id'],


//        'belongsto' => array(self::BELONGS_TO, CupContProgressivo::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, CupContProgressivo::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, CupContProgressivo::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['tipo', 'organizzazione_id'];
     //['id','descrizione'];

    public $defaultOrderColumns = ['organizzazione_id' => 'ASC', 'tipo' => 'ASC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['tipo', 'organizzazione_id'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
