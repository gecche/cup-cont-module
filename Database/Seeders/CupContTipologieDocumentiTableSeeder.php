<?php
namespace Modules\CupCont\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupContTipologieDocumentiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tipologieDocumenti = [
            ['codice' => 'FATT','nome' => 'Fattura', 'macrotipo' => 'Fattura', 'tipo_fatt_el' => 'TD01'],
            [   'codice' => 'RIC',
                'nome' => 'Ricevuta',
                'macrotipo' => 'Ricevuta', 'tipo_fatt_el' => null
            ],
            [   'codice' => 'RICSAN',
                'nome' => 'Ricevuta sanitaria',
                'macrotipo' => 'Ricevuta',
                'metodo_calcolo' => 'ricevuta_sanitaria',
                'tipo_fatt_el' => null
            ],
//            ['codice' => ,'nome' => , 'macrotipo' => , 'tipo_fatt_el' => ],
        ];

        foreach ($tipologieDocumenti as $tipologiaDocumento) {
            \App\Models\CupContTipologiaDocumento::create($tipologiaDocumento);
        }

    }
}
