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
            'title' => $this->faker->text(18),
            'job_position' => $this->faker->text(28),
            'description' => $this->faker->text(180),
            'links' => [
                'facebook' => $this->faker->url(),
                'linkedin' => $this->faker->url(),
            ],
            'profile_photo_path' => $this->faker->imageUrl(350, 250, 'cats', true, 'Faker', true)
        ];
    }
}
