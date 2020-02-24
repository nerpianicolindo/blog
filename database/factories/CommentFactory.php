<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'name_user' => $faker->sentence,
        'comment' => $faker->paragraph(2),
        'post_id' => $faker->numberBetween(1, 10),
    ];
});
