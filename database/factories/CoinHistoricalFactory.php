<?php

use Faker\Generator as Faker;

$factory->define(App\Models\CoinHistorical::class, function (Faker $faker) {
    return [
        'coin_id' => function () {
            return factory(App\Models\Coin::class)->create()->id;
        },
        'price_usd'   => $faker->randomFloat(14),
        'snapshot_at' => $faker->dateTime('now')->format('Y-m-d H:i:s'),
    ];
});
