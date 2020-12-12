<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producent;

class ProducentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
     //   Producent::truncate();

        

        Producent::factory()->count(20)->create();   
       

    }
}
