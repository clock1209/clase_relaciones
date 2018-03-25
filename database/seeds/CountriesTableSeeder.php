<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Country::truncate();

        DB::table('countries')->insert([
            ['name' => 'México'],
            ['name' => 'Alemania'],
            ['name' => 'Suecia'],
            ['name' => 'Corea del sur'],
            ['name' => 'Argentina'],
            ['name' => 'Brazil'],
            ['name' => 'Japón'],
            ['name' => 'Estados Unidos'],
            ['name' => 'China'],
            ['name' => 'Rusia']
        ]);
    }
}
