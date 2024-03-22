<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use Faker\Generator as Faker;

use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(Faker $faker): void
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $coverImg = null;
            if (fake()->boolean() == true) {
                $coverImg = fake()->imageUrl();
            }

            $releaseDate = null;
            if (fake()->boolean() == true) {
                $releaseDate = fake()->date();
            }

            Album::create([
                'title' => fake()->words(rand(1, 7), true),
                'artist' => fake()->words(rand(1, 4), true),
                'genre' => fake()->word(),
                'cover' => $coverImg,
                'release_date' => $releaseDate,
                'only_digital' => fake()->boolean(),
            ]);
        }
    }
}
