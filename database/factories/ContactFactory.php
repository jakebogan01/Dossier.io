<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'conclusion' => (string) $this->faker->sentences(3, true),
            'phone' => $this->faker->phoneNumber(),
            'links' => [
                'instagram' => $this->faker->url(),
                'facebook' => $this->faker->url(),
                'github' => $this->faker->url(),
                'linkedin' => $this->faker->url(),
                'dribbble' => $this->faker->url(),
            ],
        ];
    }
}
