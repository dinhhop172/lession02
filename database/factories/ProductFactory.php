<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'product_brand_id'=>1,
        'price' =>$faker->randomFloat,
        'desc' =>$faker->sentence(15)
    ];
});
