<?php

namespace Database\Factories;

use App\Models\EmployeeType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
        $name = fake()->name();
        
        return [
            'slug' => Str::slug($name) . '-' . Str::random(5),
            'full_name' => $name,
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'address' => fake()->address(),
            'govt_id_type' => fake()->randomElement(['Passport', 'National ID', 'Driver License']),
            'govt_id' => fake()->bothify('??######'),
            'zipcode' => fake()->postcode(),
            'profile_image' => null,
            'employee_type_id' => EmployeeType::inRandomOrder()->first()?->id ?? EmployeeType::factory(),
        ];
    }
}
