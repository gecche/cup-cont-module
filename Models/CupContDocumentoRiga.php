<?php

namespace Modules\CupCont\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for cup_cont_documenti_righe table.
 */
class CupContDocumentoRiga extends Breeze
{

//    use ModelWithUploadsTrait;

    protected $table = 'cup_cont_documenti_righe';

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

			'documento' => [self::BELONGS_TO, 'related' => \App\Models\CupContDocumento::class, 'table' => 'cup_cont_documenti', 'foreignKey' => 'documento_id'],
			'iva' => [self::BELONGS_TO, 'related' => \App\Models\CupContIva::class, 'table' => 'cup_cont_iva', 'foreignKey' => 'iva_id'],
			'prestazione' => [self::BELONGS_TO, 'related' => \App\Models\CupContPrestazione::class, 'table' => 'cup_cont_prestazioni', 'foreignKey' => 'prestazione_id'],


//        'belongsto' => array(self::BELONGS_TO, CupContDocumentoRiga::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, CupContDocumentoRiga::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, CupContDocumentoRiga::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['documento_id', 'progressivo'];
     //['id','descrizione'];

    public $defaultOrderColumns = ['documento_id' => 'ASC', 'progressivo' => 'ASC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['documento_id', 'progressivo'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
