<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pago;
use App\Models\Reserva;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pago>
 */
class PagoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pago::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $reserva = Reserva::factory()->create();

        return [
            'id_reserva' => $reserva->id,
            'date_pay' => $this->faker->dateTimeBetween($reserva->date_reserve, $reserva->date_reserve . ' +1 month')->format('Y-m-d'),
            'amount' => $reserva->total_price,
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'bank_transfer']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
