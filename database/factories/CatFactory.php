<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Cat;

$factory->define(Cat::class, function (Faker $faker) {
    return [
      'name' => $faker -> name,
      'race' => $faker -> word,
      'birthDay' => $faker -> date,
      'genere' => $faker -> randomElement(['male', 'female'])
    ];
});
