<?php

use Illuminate\Database\Seeder;
use App\Achievement;
class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achievement::truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            Achievement::create([
                'achievementName' => $faker->text(20),
                'achievementDate' => $faker->dateTime($max = 'now', $timezone = null),
                'achievementLink' => $faker->url,
                'achievementText' => $faker->text(100)
            ]);
        }
    }
}
