<?php

use Faker\Generator as Faker;

$factory->define(App\Institute::class, function (Faker $faker) {
    return [
      'name' => $faker->name(),
      'description' => $faker->paragraphs(rand(2,10),true),
    ];
});
