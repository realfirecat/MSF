<?php

use App\Thema;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Thema::class, function (Faker $faker) {
    return [
        'description' => Str::random(10)
    ];
});
