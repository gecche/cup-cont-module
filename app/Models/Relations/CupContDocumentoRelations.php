<?php

namespace App\Models\Relations;

trait CupContDocumentoRelations
{

    public function organizzazione() {

        return $this->belongsTo('App\Models\CupAnagAnagrafica', 'organizzazione_id', null, null);
    
    }

    public function anagrafica() {

        return $this->belongsTo('App\Models\CupAnagAnagrafica', 'anagrafica_id', null, null);
    
    }

    public function sede() {

        return $this->belongsTo('App\Models\CupAnagSede', 'sede_id', null, null);
    
    }

    public function formapagamento() {

        return $this->belongsTo('App\Models\CupContFormaPagamento', 'formapagamento_id', null, null);
    
    }

    public function tipologia() {

        return $this->belongsTo('App\Models\CupContTipologiaDocumento', 'tipologia_id', null, null);
    
    }

    public function righe() {

        return $this->hasMany('App\Models\CupContDocumentoRiga', 'documento_id', null);
    
    }

    public function righeiva() {

        return $this->hasMany('App\Models\CupContDocumentoRigaIva', 'documento_id', null);
    
    }

    public function registrazioni() {

        return $this->belongsToMany('App\Models\CupContRegistrazione', 'cup_cont_registrazioni_documenti', 'documento_id', 'registrazione_id',
                                    null, null, null);
    
    }



}
