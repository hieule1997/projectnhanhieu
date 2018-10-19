<?php

use Illuminate\Database\Seeder;
use App\Project;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            Project::create([
                'projectName' => $faker->text(20),
                'projectImage' => $faker->text(20),
                'projectTitle' => $faker->text(20),
                'projectInfor' => $faker->text(50),
                'projectText' => $faker->text(191),
            ]);
        }
    }
}
