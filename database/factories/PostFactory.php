<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(1, 3)),
        'body' => $faker->sentence(rand(2, 8)),
        'name' => $faker->word,
    ];
});
