<?php

use Illuminate\Database\Seeder;
use App\News;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         News::truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            News::create([
                'newsTitle' => $faker->text(20),
                'linkNews' => $faker->url,
                'newsImage' => $faker->text(20),
                'newsInfor' => $faker->text(191),
                'newsDate' => $faker->dateTime($max = 'now', $timezone = null),
                'linkShow' => $faker->text(20),
            ]);
        }
    }
}
