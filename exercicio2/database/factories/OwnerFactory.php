<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'name'=>$faker->firstName,
        'birth_date'=>$faker->dateTime,
        'country_id'=>rand(1,20),
        'wallet_money'=>$faker->numberBetween(500,150000),
    ];
});
