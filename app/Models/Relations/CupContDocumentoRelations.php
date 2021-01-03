<?php

namespace App\Models\Relations;

trait CupContDocumentoRelations
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

    public function formapagamento() {

        return $this->belongsTo(\App\Models\CupContFormaPagamento::class, 'formapagamento_id', null, null);

    }

    public function tipologia() {

        return $this->belongsTo(\App\Models\CupContTipologiaDocumento::class, 'tipologia_id', null, null);

    }

    public function registrazioni() {

        return $this->belongsToMany(\App\Models\CupContRegistrazione::class, 'cup_cont_registrazioni_documenti', 'documento_id', 'registrazione_id',
                                    null, null, null);

    }



}
