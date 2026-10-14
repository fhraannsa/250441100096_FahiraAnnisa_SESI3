<?php

namespace Database\Factories;

use App\Models\kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<kendaraan>
 */
class kendaraansFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'kendaraan' => fake() ->randomElement([
            'Toyota Avanza',
            'Honda Brio',
            'Honda Beat',
            'Yamaha NMAX',
          ]),  
        ];
    }
}
