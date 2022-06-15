<?php

namespace Database\Factories;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class SkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skill::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'introduction' => (string) $this->faker->sentences(3, true),
            'facts' => [
                'one' => $this->faker->sentence(10),
                'two' => $this->faker->sentence(10),
                'three' => $this->faker->sentence(10),
            ],
            'skills' => [
                1 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->sentence(16),
                ],
                2 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->sentence(16),
                ],
                3 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->sentence(16),
                ],
                4 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->sentence(16),
                ],
            ]
        ];
    }
}
