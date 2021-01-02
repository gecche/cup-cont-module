<?php
namespace Modules\CupCont\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CupAnagProfessione;
use App\Models\CupAnagStatoCivile;

class CupContFormePagamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $formePagamento = [
            ['codice' => 'BON','nome' => 'Bonifico', 'immediato' => 0, 'modalita_fatt_el' => 'MP05'],
            ['codice' => 'CON','nome' => 'Contanti', 'immediato' => 1, 'modalita_fatt_el' => "MP01"],
            ['codice' => 'POS','nome' => 'Carta di pagamento su POS', 'immediato' => 1, 'modalita_fatt_el' => "MP08"],
            ['codice' => 'ASS','nome' => 'Assegno', 'immediato' => 1, 'modalita_fatt_el' => "MP02"],
//            ['codice' => ,'nome' => , 'immediato' => , 'modalita_fatt_el' => ],
        ];

        foreach ($formePagamento as $formaPagamento) {
            \App\Models\CupContFormaPagamento::create($formaPagamento);
        }

    }
}
