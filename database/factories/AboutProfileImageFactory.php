<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AboutProfileImage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutProfileImage>
 */
class AboutProfileImageFactory extends Factory
{
    protected $model = AboutProfileImage::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image_path' => $this->faker->imageUrl,
        ];
    }
}
