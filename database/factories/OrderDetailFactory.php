<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderDetail;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\OrderDetail::class, function (Faker $faker) {
    return [
        'orders_id'=>1,
        'product_id'=>1,
        'name'=>$faker->name,
        'price'=>$faker->randomFloat,
        'quantity'=>$faker->randomDigit,
        'total'=>$faker->randomDigit
    ];
});
