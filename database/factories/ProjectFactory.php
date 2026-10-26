<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'project_name' => fake()->name(),
            'client_name' => fake()->name(),
            'project_description' => fake()->text(50),
            'project_deadline' => fake()->date('Y-m-d','now')
        ];
    }
}
