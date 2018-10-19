<?php

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
        $this->call(ActivitysSeeder::class);
        $this->call(AchievementSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
