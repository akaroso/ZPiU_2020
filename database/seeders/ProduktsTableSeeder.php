<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use App\Models\Producent;
use Illuminate\Database\Seeder;
use App\Models\Produkt;

class ProduktsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        

        
        Produkt::factory()->count(100000)->create()
        ->each(function ($u) {
            $u->kategorias()->attach(random_int($min=1,$max=25));
            $u->producents()->attach(random_int($min=1,$max=50));
        });
        

    }
}
