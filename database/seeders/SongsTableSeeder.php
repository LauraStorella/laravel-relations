<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Generator as Faker;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5 ; $i++) { 
            for ($j=0; $j < 10 ; $j++) { 
                $new_song = new Song();
                $new_song->title = $faker->sentence();
                $new_song->genre = $faker->randomElement([
                    'pop', 'jazz', 'blues', 'rock', 'country',
                    'reggae', 'metal', 'rap', 'indie', 'classic',
                ]); 
                $new_song->album_id = $i + 1;
                $new_song->save();
            }
        }
    }
}
