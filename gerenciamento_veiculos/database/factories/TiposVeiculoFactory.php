<?php

namespace Database\Factories;

use App\Models\TiposVeiculo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Fakecar;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TiposVeiculo>
 */
class TiposVeiculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TiposVeiculo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        return [
            'descricao' => $this->faker->vehicleType,
        ];
    }
}
