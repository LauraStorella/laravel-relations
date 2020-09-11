<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use Faker\Generator as Faker;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5 ; $i++) { 
            $new_album = new Album();
            $new_album->title = $faker->word();
            $new_album->year = $faker->numberBetween(1980, 2020);
            $new_album->url = $faker->imageUrl(300,300, 'abstract');
            $new_album->save();
        }
    }
}
