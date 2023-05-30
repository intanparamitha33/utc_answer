<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        for($i=1; $i < 11; $i++) {
            Book::create([
                'title' => $faker->sentence(),
                'description' => $faker->sentence(),
                'image' => $faker->imageUrl(360, 240),
                'time' => $faker->time()
            ]);
        }
    }
}
