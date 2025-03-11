<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reserva;
use App\Models\User;
use App\Models\Viaje;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reserva::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $viaje = Viaje::factory()->create();
        $numPersons = $this->faker->numberBetween(1, 5);
        $totalPrice = $viaje->price * $numPersons;

        return [
            'id_user' => User::factory(),
            'id_viaje' => $viaje->id,
            'date_reserve' => $this->faker->dateTimeBetween('-1 month', '+3 months')->format('Y-m-d'),
            'num_persons' => $numPersons,
            'total_price' => $totalPrice,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
