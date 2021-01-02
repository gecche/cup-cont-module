<?php
namespace App\Foorm;

use App\Models\CupContCostanteFattEl;

trait CupContFattElTrait {

    protected function createOptionsNaturaFattEl($fieldValue, $defaultOptionsValues, $relationName = null,$relationMetadata = []) {
        return $this->_createOptionsFattEl('Natura Esenzione',$fieldValue, $defaultOptionsValues, $relationName,$relationMetadata);
    }

    protected function createOptionsModalitaFattEl($fieldValue, $defaultOptionsValues, $relationName = null,$relationMetadata = []) {
        return $this->_createOptionsFattEl('Modalita Pagamento',$fieldValue, $defaultOptionsValues, $relationName,$relationMetadata);
    }

    protected function createOptionsTipoFattEl($fieldValue, $defaultOptionsValues, $relationName = null,$relationMetadata = []) {
        return $this->_createOptionsFattEl('Tipo Documento',$fieldValue, $defaultOptionsValues, $relationName,$relationMetadata);
    }

    protected function _createOptionsFattEl($tipo, $fieldValue, $defaultOptionsValues, $relationName,$relationMetadata) {

        $costanteFattEl = new CupContCostanteFattEl();

        $builder = CupContCostanteFattEl::where('attivo',1)
            ->where('tipo',$tipo);
        return $costanteFattEl->getForSelectList($builder);

    }

}
