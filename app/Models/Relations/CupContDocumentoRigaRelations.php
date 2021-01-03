<?php

namespace App\Models\Relations;

trait CupContDocumentoRigaRelations
{

    public function documento() {

        return $this->belongsTo(\App\Models\CupContDocumento::class, 'documento_id', null, null);

    }

    public function iva() {

        return $this->belongsTo(\App\Models\CupContIva::class, 'iva_id', null, null);

    }

    public function prestazione() {

        return $this->belongsTo(\App\Models\CupContPrestazione::class, 'prestazione_id', null, null);

    }



}
