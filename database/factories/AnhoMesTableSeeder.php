<?php

use Faker\Generator as Faker;

$factory->define(App\Anho_Mes::class, function (Faker $faker) {
    return [
        'anho'=>year($max = 'now') 
        'mes'=>monthName($max = 'now') ,

    ];
});
