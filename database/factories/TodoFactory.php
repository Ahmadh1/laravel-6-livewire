<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use App\User;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' =>  $faker->words(10, true),
        'completed' => 0,
        'user_id' => 1
    ];
});
