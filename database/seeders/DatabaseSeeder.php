<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Skill::factory()->count(1)->create();

        DB::table('skill_icons')->insert([
            [
                'name' => 'HTML',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="w-[27px] h-[31.5px] fill-current"><path d="m0 0 2.454 27.83 11.011 3.67 11.081-3.67L27 0Zm21.67 8.993H8.747l.288 3.473h12.347L20.426 22.9l-6.884 1.9v.021h-.077l-6.94-1.92-.425-5.33h3.357L9.7 20.25l3.762 1.02 3.776-1.02.422-4.373H5.927l-.9-10.237H21.98l-.309 3.354Z"/></svg>',
            ],
        ]);
    }
}
