<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'user_id' => 1,
            'portfolio_name' => $this->faker->name(),
            'portfolio_email' => $this->faker->unique()->safeEmail(),
            'total_clients' => $this->faker->randomDigit(),
            'total_tools' => $this->faker->randomDigit(),
            'settings' => [
                'public' => (int) $this->faker->boolean(50),
                'dark_mode' => (int) $this->faker->boolean(50),
                'track_views' => (int) $this->faker->boolean(50),
                'track_likes' => (int) $this->faker->boolean(50)
            ]
        ];
    }
}
