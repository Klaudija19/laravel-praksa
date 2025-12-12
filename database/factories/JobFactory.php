<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    protected $model = \App\Models\Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->numberBetween(30000, 100000),
        ];
    }
}
