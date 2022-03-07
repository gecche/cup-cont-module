<?php
namespace Modules\CupCont\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupContIvaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ive = [
            ['codice' => 'IVA22','nome' => 'Iva ordinaria 22%', 'aliquota' => 22.00, 'natura_fatt_el' => null],
            ['codice' => 'IVA10','nome' => 'Iva ridotta 10%', 'aliquota' => 10.00, 'natura_fatt_el' => null],
            ['codice' => 'IVA4','nome' => 'IVA ridotta 4%', 'aliquota' => 4.00, 'natura_fatt_el' => null],

            ['codice' => 'ESENTE','nome' => 'Esente art. 14 comma 10 L.n. 537 del 24.12.1993', 'aliquota' => 0.00,
             'esenzione' => 1, 'descrizione_esenzione' => 'Esente art. 14 comma 10 L.n. 537 del 24.12.1993',
             'natura_fatt_el' => "N4"],
//            ['codice' => ,'nome' => , 'aliquota' => ,
//             'esenzione' => , 'descrizione_esenzione' => ,'natura_fatt_el' => ],
        ];

        foreach ($ive as $iva) {
            \App\Models\CupContIva::create($iva);
        }

    }
}
