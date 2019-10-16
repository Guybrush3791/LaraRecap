<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Vaccination;

$factory->define(Vaccination::class, function (Faker $faker) {
    return [
      'name' => $faker -> name,
      'price' => $faker -> randomFloat(2, 50, 150)
    ];
});
