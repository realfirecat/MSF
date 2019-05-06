<?php

use App\Flashcard;
use App\User;
use App\Thema;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Flashcard::class, function (Faker $faker) {
    return [
        'title' => Str::random(10),
        'content' => Str::random(100),
        'isFavorite' => $faker->boolean,
        'fk_userID' => factory(User::class)->create()->id,
        'fk_themaID' => factory(Thema::class)->create()->id
    ];
});
