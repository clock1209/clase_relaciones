<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::truncate();

        for ($i = 1; $i <= 20; $i++) {
            factory('App\Post')->create([
                'user_id' => rand(1, 10)
            ]);
        }
    }
}
