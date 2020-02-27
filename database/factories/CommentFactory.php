<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $data = [
        'comment' => $faker->paragraph(2),
        'user_id' => $faker->numberBetween(1,10),
        'post_id' => $faker->numberBetween(1, 100),
    ];
    $data['name_user'] = \App\User::find($data['user_id'])->name;
    return $data;
});
