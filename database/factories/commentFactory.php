<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'post_id'   => $faker->randomElement(App\Post::pluck('id')->toArray()),
        
        'name'      => $faker->name,
        'email'     => $faker->unique()->safeEmail,
        'website'   => $faker->unique()->url,
        'comment'   => $faker->unique()->text($maxNbChars = 100) ,
    ];
});
