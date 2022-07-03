<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'links' => [
                'code' => $this->faker->url(),
                'github' => $this->faker->url(),
            ],
            'public' => 1,
            'total_likes' => $this->faker->numberBetween(0, 300),
            'profile_photo_path' => $this->faker->imageUrl(350, 250, 'cats', true, 'Faker', true),
        ];
    }
}
