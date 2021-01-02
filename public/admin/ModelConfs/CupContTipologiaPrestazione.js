
var ModelCupContTipologiaPrestazione = {
    search: {
        modelName : 'cup_cont_tipologia_prestazione',
        fields: [
			'codice',
			'descrizione',

        ],

    },
    list: {
        modelName : 'cup_cont_tipologia_prestazione',
        actions : [
            'action-insert',
            'action-edit',
            'action-delete',
            'action-delete-selected',
        ],
        fields: [
			'codice',
			'descrizione',
			'imponibile',
			'iva',

        ],
        fieldsConfig: {
			'iva' : {
                type : "w-belongsto",
                fields : [
                    'codice'
                ],
			},

        },
        orderFields : {
			'codice' : 'codice',
			'descrizione' : 'descrizione',
        }

    },
    edit: {
        modelName : 'cup_cont_tipologia_prestazione',
        actions : ['action-save','action-back'],
        fields: [
			'codice',
			'descrizione',
			'imponibile',
			'iva_id',

        ],
        fieldsConfig: {
			'codice' : {
                type : "w-input",
			},
			'descrizione' : {
                type : "w-input",
			},
			'imponibile' : {
                type : "w-input",
                inputType : "number",
			},
			'iva_id' : {
                type : "w-select",
                //domainValues : [],
                //domainValuesOrder : [],
			},

        }

    },
}
