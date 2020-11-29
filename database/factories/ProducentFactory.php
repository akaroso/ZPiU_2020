<?php

namespace Database\Factories;

use App\Models\Producent;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProducentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'nazwa_producenta' => $faker->company,
        ];
    }
}
