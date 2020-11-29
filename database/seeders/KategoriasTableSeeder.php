<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategoria;


class KategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
     //   Kategoria::truncate();

        

        Kategoria::factory()->count(25)->create();

    }
}
