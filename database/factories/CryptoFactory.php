<?php

use Faker\Generator as Faker;

$factory->define(StockFlowSite\Crypto::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'quantity'=>$faker->randomFloat($nbMaxDecimals = 8, $min = 0, $max = 999999999.99999999),
        'value'=>$faker->randomFloat($nbMaxDecimals = 8, $min = 0, $max = 999999999.99999999),
        'user_id'=>factory('StockFlowSite\User')->create()->id,
    ];
});
