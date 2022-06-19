<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->hasAttached(Experience::factory()->create())
            ->hasAttached(Project::factory()->create())
            ->create([
                'name' => 'test',
                'email' => 'test@gmail.com',
                'password' => bcrypt('12345678'),
            ]);

        Skill::factory()->count(1)->create();
    }
}
