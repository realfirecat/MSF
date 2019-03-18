<?php

use App\Flashcard;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Flashcard::class, function (Faker $faker) {
    return [
        'title' => Str::random(10),
        'content' => Str::random(100),
    ];
});
