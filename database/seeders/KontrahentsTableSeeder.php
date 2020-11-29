<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontrahent;

class KontrahentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Kontrahent::truncate();

        

        Kontrahent::factory()->count(50)->create();

    }
}
