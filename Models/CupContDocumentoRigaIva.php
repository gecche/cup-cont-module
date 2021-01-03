<?php

namespace Modules\CupCont\Models;

use Gecche\Cupparis\App\Breeze\Breeze;

/**
 * Breeze (Eloquent) model for cup_cont_documenti_righe_iva table.
 */
class CupContDocumentoRigaIva extends Breeze
{

//    use ModelWithUploadsTrait;

    protected $table = 'cup_cont_documenti_righe_iva';

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


//        'belongsto' => array(self::BELONGS_TO, CupContDocumentoRigaIva::class, 'foreignKey' => '<FOREIGNKEYNAME>'),
//        'belongstomany' => array(self::BELONGS_TO_MANY, CupContDocumentoRigaIva::class, 'table' => '<TABLEPIVOTNAME>','pivotKeys' => [],'foreignKey' => '<FOREIGNKEYNAME>','otherKey' => '<OTHERKEYNAME>') ,
//        'hasmany' => array(self::HAS_MANY, CupContDocumentoRigaIva::class, 'table' => '<TABLENAME>','foreignKey' => '<FOREIGNKEYNAME>'),
    ];

    public static $rules = [
//        'username' => 'required|between:4,255|unique:users,username',
    ];

    public $columnsForSelectList = ['documento_id', 'iva_id'];
     //['id','descrizione'];

    public $defaultOrderColumns = ['documento_id' => 'ASC', 'iva_id' => 'ASC', ];
     //['cognome' => 'ASC','nome' => 'ASC'];

    public $columnsSearchAutoComplete = ['documento_id', 'iva_id'];
     //['cognome','denominazione','codicefiscale','partitaiva'];

    public $nItemsAutoComplete = 20;
    public $nItemsForSelectList = 100;
    public $itemNoneForSelectList = false;
    public $fieldsSeparator = ' - ';


}
