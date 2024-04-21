<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profitable;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profitable>
 */
class ProfitableFactory extends Factory
{
    protected $model = Profitable::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'join_class' => $this->faker->text(200),
            'month_of_class' => $this->faker->sentence(),
            'one_on_one_training' => $this->faker->text(200),
            'teach_a_team' => $this->faker->text(200),
        ];
    }
}

