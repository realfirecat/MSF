<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'token' => Str::random(20),
        'username' => Str::random(10),
    ];
});
