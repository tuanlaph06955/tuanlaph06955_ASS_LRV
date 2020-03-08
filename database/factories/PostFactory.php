<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->paragraph(5),
        'category_id' => $faker->randomDigit,
        'time' => $faker->date(),
        'user_id' => $faker->randomDigit,
    ];
});
