<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Phone::truncate();

        $users = App\User::all();
        foreach ($users as $user) {
            factory('App\Phone')->create([
                'user_id' => $user->id
            ]);
        }
    }
}
