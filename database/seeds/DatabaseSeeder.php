<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(PhonesTableSeeder::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(VideosTableSeeder::class);
         $this->call(TagsTableSeeder::class);
    }
}
