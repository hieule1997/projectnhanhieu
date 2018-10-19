<?php

use Illuminate\Database\Seeder;
use App\Image;
class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            Image::create([
                'imageName' => $faker->text(20),
                'imageFile' => $faker->text(20),
            ]);
        }
    }
}
