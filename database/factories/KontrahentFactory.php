<?php

namespace Database\Factories;

use App\Models\Kontrahent;
use Illuminate\Database\Eloquent\Factories\Factory;

class KontrahentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kontrahent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'nazwa_kontrahenta' => $faker->name,
            'nip' => $faker->word,
           // 'znizka' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 0.75)
        ];
    }
}
