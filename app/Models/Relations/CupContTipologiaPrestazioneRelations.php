<?php

namespace App\Models\Relations;

trait CupContTipologiaPrestazioneRelations
{

    public function iva() {

        return $this->belongsTo(\App\Models\CupContIva::class, 'iva_id', null, null);

    }



}
