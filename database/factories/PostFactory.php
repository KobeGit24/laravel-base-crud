<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [

      'title' => $faker -> text($maxNbChars = 64),
      'text' => $faker -> text($maxNbChars = 100),
      'category' => $faker -> text($maxNbChars = 20),
      'like' => $faker -> randomDigit(),
      'dislike' => $faker -> randomDigit()

    ];
});
