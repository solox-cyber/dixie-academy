<?php

namespace Database\Factories;
use App\Models\Resources;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resources>
 */
class ResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Resources::class;
    public function definition(): array
    {
        return [
            //
        ];
    }
}
