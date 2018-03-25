<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Comment::truncate();

        for ($i = 1; $i <= 30; $i++) {
            factory('App\Comment')->create([
                'user_id' => rand(1, 10)
            ]);
        }
    }
}
