<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 10; $i++){
            $post = new Post();
            $post->title = $faker->text(50);
            $post->content = $faker->text(300);

            $slug = Str::slug($post->title);
            $slug_base = $slug;
            $counter = 1;
            $existingPost = Post::where('slug', $slug)->first();
            while($existingPost){
                $slug = $slug_base . '_' . $counter;
                $counter++;
                $existingPost = Post::where('slug', $slug)->first();
            }

            $post->slug = $slug;
            $post->save();
        }
    }
}
