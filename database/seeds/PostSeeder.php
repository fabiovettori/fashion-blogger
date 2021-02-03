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
        for ($i=0; $i < 20; $i++) {
            $new_post = new Post();
            $new_post->author = $faker->name();
            $new_post->contributor = $faker->name();
            $new_post->title = $faker->words(5, true);
            $new_post->content = $faker->paragraphs(10, true);
            $new_post->readable_time = $faker->numberBetween(0, 15);
            $new_post->cover = '';

            $slug = Str::slug($new_post->title, '-');
            $slug_base = $slug;

            $test = Post::where('slug', $slug)->first();
            $counter = 1;
            while ($test) {
                $slug = $slug_base . '-' . $counter;
                $test = Post::where('slug', $slug)->first();
                $counter ++;
            };
            $new_post->slug = $slug;
            $new_post->save();
        }
    }
}
