<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Viaje;
use App\Models\Destino;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Viaje>
 */
class ViajeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Viaje::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateStart = $this->faker->dateTimeBetween('+1 week', '+6 months');
        $dateEnd = $this->faker->dateTimeBetween($dateStart->format('Y-m-d'), $dateStart->format('Y-m-d') . ' +1 month');


        return [
            'name' => $this->faker->sentence(3),
            'id_destino' => Destino::factory(),
            'date_start' => $dateStart->format('Y-m-d'),
            'date_end' => $dateEnd->format('Y-m-d'),
            'price' => $this->faker->randomFloat(2, 200, 10000), // Precio entre 200 y 10000
            'disponibility' => $this->faker->boolean(80), // 80% de probabilidad de estar disponible
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
