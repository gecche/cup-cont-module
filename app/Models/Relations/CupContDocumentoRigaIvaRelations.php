<?php

namespace App\Models\Relations;

trait CupContDocumentoRigaIvaRelations
{

    public function documento() {

        return $this->belongsTo(\App\Models\CupContDocumento::class, 'documento_id', null, null);

    }

    public function iva() {

        return $this->belongsTo(\App\Models\CupContIva::class, 'iva_id', null, null);

    }



}
