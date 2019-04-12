<?php

use App\Cars;
use Faker\Generator as Faker;
use carfaker\provider\Base;

$factory->define(App\Cars::class, function (Faker $faker) {

    $faker->addProvider(new \Faker\Provider\Fakecar($faker));

    echo $faker->vehicleBrand;

    $v = $faker->vehicleArray();

    return [
        'vehicle_type'      => 'car',
        'vin'               => $faker->vin,
        'registration_no'   => $faker->vehicleRegistration,
        'brand'             => $v['brand'],
        'model'             => $v['model'],
        'year'              => $faker->biasedNumberBetween(1998,2019, 'sqrt'),
    ];
});