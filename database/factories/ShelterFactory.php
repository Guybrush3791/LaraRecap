<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Shelter;

$factory->define(Shelter::class, function (Faker $faker) {
    return [
      'name' => $faker -> name,
      'street' => $faker -> streetAddress,
      'capacity' => rand(50, 200)
    ];
});
