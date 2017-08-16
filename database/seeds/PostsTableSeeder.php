<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $posts = [];
        $faker = Factory::create();

        for ($i = 1; $i <=10; $i++)
        {
        	$image = "Post_Image_" . rand(1,5).".jpg";
        	$date = date("Y-m-d H:i:s", strtotime("2017-08-10 08:00:00 + {$i} days"));
        	$posts[]=[
        		'author_id' => rand(1,3),
        		'title' => $faker->sentence(rand(8,12)),
        		'excerpt' => $faker->text(rand(250,300)),
        		'body' => $faker->paragraphs(rand(10,15),true),
        		'slug' => $faker->slug(),
        		'image' => rand(0,1) == 1 ? $image : NULL,
        		'created_at' => $date,
        		'updated_at' => $date,
        	];

        }
        DB::table('posts')->insert($posts);
    }
}
