<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KategoriasTableSeeder::class);
        $this->call(ProducentsTableSeeder::class);
        $this->call(KontrahentsTableSeeder::class);
        $this->call(ProduktsTableSeeder::class);

    }
}
