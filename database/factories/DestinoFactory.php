<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Destino;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destino>
 */
class DestinoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Destino::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'imagen_url' => $this->faker->imageUrl(640, 480, 'travel', true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
