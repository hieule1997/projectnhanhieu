<?php

use Illuminate\Database\Seeder;
use App\Video;
class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            Video::create([
                'videoName' => $faker->text(20),
                'videoImage' => $faker->text(20),
                'videoLink' => $faker->url,
                'videoFile' => $faker->text(50),
            ]);
        }
    }
}
