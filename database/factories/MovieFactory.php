<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'release_date' => $faker->dateTime(),
        'poster_image' => $faker->imageUrl(),
    ];
});
