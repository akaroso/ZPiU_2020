<?php

namespace Database\Factories;

use App\Models\Produkt;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class ProduktFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produkt::class;
    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'nazwa_produktu' => $faker->word(),
            'cena_netto' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
            'stawka_VAT' => $faker->randomElement(['1', '1.05','1.08', '1.23']),
            'jednostka_miary' => $faker->sentence,
            'czy_usluga' => $faker->boolean($chanceOfGettingTrue = 50),
            
            //
        ];
    }
}
