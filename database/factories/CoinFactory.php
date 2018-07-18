<?php

use Faker\Generator as Faker;

$factory->define(App\Coin::class, function (Faker $faker) {
    $rank = 1;

    return [
        'name' => $faker->name,
        'symbol' => $faker->bothify('#?#'),
        'logo' => null,
        'rank' => $faker->numberBetween(1, 5000),
        'price_usd' => $faker->randomFloat(2, 0, 9999999999),
        'price_btc' => $faker->randomFloat(2, 0, 9999999999),
        '24h_volume_usd' => $faker->randomFloat(2, 0, 9999999999),
        'market_cap_usd' => $faker->randomNumber(2),
        'available_supply' => $faker->randomNumber(2),
        'total_supply' => $faker->randomNumber(2),
        'percent_change_1h' => $faker->randomFloat(2, -100, 100),
        'percent_change_24h' => $faker->randomFloat(2, -100, 100),
        'percent_change_7d' => $faker->randomFloat(2, -100, 100),
    ];
});
