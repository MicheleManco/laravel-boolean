<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postcard;
use Faker\Generator as Faker;

$factory->define(Postcard::class, function (Faker $faker) {
    return [
        'sender'=> $faker -> name(),
        'address'=> $faker -> words(3, true),
        'text'=> $faker -> sentence(),
    ];
});
