<?php

namespace Modules\CupCont\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CupContDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CupContCostantiFattElTableSeeder::class);
        $this->call(CupContTipologieDocumentiTableSeeder::class);
        $this->call(CupContFormePagamentoTableSeeder::class);
        $this->call(CupContIvaTableSeeder::class);
    }
}
