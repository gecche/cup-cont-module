<?php

namespace App\Models\Relations;

trait CupContProgressivoRelations
{

    public function organizzazione() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'organizzazione_id', null, null);

    }

    public function sede() {

        return $this->belongsTo(\App\Models\CupAnagSede::class, 'sede_id', null, null);

    }

    public function tipodocumento() {

        return $this->belongsTo(\App\Models\CupContTipologiaDocumento::class, 'tipodocumento_id', null, null);

    }



}
