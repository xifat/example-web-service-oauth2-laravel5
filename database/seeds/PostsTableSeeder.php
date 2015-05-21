<?php

use Illuminate\Database\Seeder;
use App\Post;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
        	Post::create([
        		'title' => $faker->sentence,
        		'body' 	=> $faker->paragraph
        	]);
        }
    }
}
