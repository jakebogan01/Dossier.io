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
            'user_id' => User::factory()->create()->id,
            'portfolio_name' => $this->faker->name(),
            'total_clients' => $this->faker->randomDigit(),
            'total_tools' => $this->faker->randomDigit(),
            'settings' => [
                'public' => $this->faker->boolean(50),
                'dark_mode' => $this->faker->boolean(50),
                'track_views' => $this->faker->boolean(50),
                'track_likes' => $this->faker->boolean(50)
            ]
        ];
    }
}
