<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $puestos = ['Pasante', 'Associate', 'Developer', 'Director'];
        return [
            'first_name' => $firstName = $this->faker->firstName(),
            'last_name' => $lastName = $this->faker->lastName(),
            'phone' =>  $this->faker->phoneNumber(),
            'email' => Str::ascii((Str::lower($firstName)). "." .(Str::lower($lastName)) . '@arafy.es'),
            'address' => $this->faker->address(),
            'role' => $this->faker->randomElement($puestos),
            'joined_at' => '2023-03-02',
            'yearly_salary' => $this->faker->randomFloat(2, 15000, 100000),
        ];
    }
}
