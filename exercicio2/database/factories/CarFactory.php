<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand_id'=>rand(1,20),
        'registration'=>$faker->bothify('## ?? ##'),
        'year_of_manufacture'=>$faker->date(),
        'color'=>$faker->colorName,
        'owner_id'=>rand(1,20),

    ];
});
