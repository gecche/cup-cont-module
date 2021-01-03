<?php

namespace App\Models\Relations;

trait CupContRegistrazioneRelations
{

    public function organizzazione() {

        return $this->belongsTo(\App\Models\CupAnagAnagrafica::class, 'organizzazione_id', null, null);

    }

    public function sede() {

        return $this->belongsTo(\App\Models\CupAnagSede::class, 'sede_id', null, null);

    }

    public function documenti() {

        return $this->belongsToMany(\App\Models\CupContRegistrazione::class, 'cup_cont_documenti_documenti', 'registrazione_id', 'documento_id',
                                    null, null, null);

    }



}
