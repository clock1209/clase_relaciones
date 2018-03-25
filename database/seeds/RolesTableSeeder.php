<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::truncate();
        DB::table('role_user')->truncate();

        factory('App\Role')
            ->create(['name' => 'Admin'])
            ->create(['name' => 'Guest'])
            ->create(['name' => 'Customer']);

        $roles = \App\Role::all();

        for ($i = 1; $i <= 20; $i++) {
            $roles->find(rand(1, 3))->users()->attach(rand(1, 10));
        }
    }
}
