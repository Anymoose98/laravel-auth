<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
use Faker\Generator as Faker;
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $post=new Post();

            $post->title -> $faker->sentence;
            $post->slug -> slugprova;
            $post->description -> $faker->paragraph;
            $post->img -> $faker->imageUrl($width = 200, $height = 200, 'man');

            $post->save();
    };
}
}