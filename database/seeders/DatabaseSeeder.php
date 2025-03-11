<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Destino;
use App\Models\Viaje;
use App\Models\Reserva;
use App\Models\Pago;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Destino::factory()->count(5)->create();

        Viaje::factory()->count(10)->create();
    
        User::factory()->count(10)->create();
    
        Reserva::factory()->count(15)->create();
    
        Pago::factory()->count(15)->create();

    User::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);
    }
}
