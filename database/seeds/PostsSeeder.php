<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            Post::create([
                'postTitle' => $faker->text(20),
                'createDate' => $faker->dateTime($max = 'now', $timezone = null),
                'summary' => $faker->text(20),
                'content' => $faker->text(191),
                'image' => $faker->text(20),
            ]);
        }
    }
}
