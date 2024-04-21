<?php

namespace Database\Factories;
use App\Models\AboutProfile;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutProfile>
 */
class AboutProfileFactory extends Factory
{
    protected $model = AboutProfile::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'who_am_i' => $this->faker->paragraph,
            'about_dixie' => $this->faker->paragraph,
        ];
    }
}
