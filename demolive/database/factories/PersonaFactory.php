<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::all('id')->random(),
            'ci' => $this->faker->numberBetween(10000, 99999),
            'apellidos' => $this->faker->lastName() . ' ' . $this->faker->monthName(),
            'nombres' => $this->faker->firstName(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address()
        ];
    }
}
