<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'job_position' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'links' => [
                'facebook' => $this->faker->url(),
                'linkedin' => $this->faker->url(),
            ],
        ];
    }
}
