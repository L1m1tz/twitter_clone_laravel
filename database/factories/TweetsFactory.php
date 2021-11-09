<?php

use App\tweets;
use Faker\Generator as Faker;

$factory->define(tweets::class, function (Faker $faker) {
    return [
        //
        'user_id' => 1,
        'text' => $faker->sentence(2)
    ];
});
