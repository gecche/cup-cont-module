<?php

namespace App\Models\Relations;

trait CupContPrestazioneRelations
{

    public function organizzazione() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'organizzazione_id', null, null);

    }

    public function anagrafica() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'anagrafica_id', null, null);

    }

    public function sede() {

        return $this->belongsTo(\App\Models\CupAnagSede::class, 'sede_id', null, null);

    }

    public function tipologia() {

        return $this->belongsTo(\App\Models\CupContTipologiaPrestazione::class, 'tipologia_id', null, null);

    }

    public function iva() {

        return $this->belongsTo(\App\Models\CupContIva::class, 'iva_id', null, null);

    }



}
