<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployeeType>
 */
class EmployeeTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->jobTitle();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'status' => true,
            'crm_access' => fake()->boolean(),
            'projec_mgmt_access' => fake()->boolean(),
        ];
    }
}
