<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(1, 3)),
        'url' => $faker->url,
        'name' => $faker->word
    ];
});
