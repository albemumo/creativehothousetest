<?php

use Faker\Generator as Faker;

$factory->define(App\UserTrade::class, function (Faker $faker) {
    return [
        'coin_id' => function () {
            return factory(App\Coin::class)->create()->id;
        },
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'amount'    => $faker->randomFloat(2, 0, 9999999999),
        'price_usd' => $faker->randomFloat(2, 0, 9999999999),
        'notes'     => $faker->text,
        'traded_at' => $faker->dateTime(),
    ];
});
