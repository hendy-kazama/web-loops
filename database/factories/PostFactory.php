<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'user_id'   => $faker->randomElement(App\User::pluck('id')->toArray()),

        'title'     => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true),
        'slug'      => $faker->unique()->slug,
        'content'   => $faker->unique()->text($maxNbChars = 200) ,
        
    ];
});
