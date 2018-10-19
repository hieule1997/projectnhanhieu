<?php

use Illuminate\Database\Seeder;
use App\Activitys;
class ActivitysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activitys::truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            Activitys::create([
                'intervaltime' => $faker->text(20),
                'activityDate' => $faker->text(20),
                'activityText' => $faker->text(100)
            ]);
        }

    }
}
