<?php

namespace Database\Factories;

use App\Models\SalesRepresentative;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesRepresentativeFactory extends Factory
{
    protected $model = SalesRepresentative::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->safeEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'joined_at' => now(),
            'current_route' => $this->faker->streetName(),
            'comments' => $this->faker->paragraph(),
        ];
    }
}
