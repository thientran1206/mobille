<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'product_brand_id' => 1,
        'product_brand_id' => $faker->randomFloat,
        'price' => $faker->randomFloat,
        'img' => $faker->url,
        'pin' => $faker->word,
        'os' => $faker->word
    ];
});
