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
            'introduction' => $this->faker->text(180),
            'facts' => [
                1 => $this->faker->text(70),
                2 => $this->faker->text(70),
                3 => $this->faker->text(70),
            ],
            'skills' => [
                1 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->text(180),
                ],
                2 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->text(180),
                ],
                3 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->text(180),
                ],
                4 => [
                    'skill' => $this->faker->word(),
                    'description' => $this->faker->text(180),
                ],
            ]
        ];
    }
}
