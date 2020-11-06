<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Profesores;
use Faker\Generator as Faker;

$factory->define(Profesores::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'apellido_paterno' => $faker->word,
        'apellido_materno' => $faker->word,
        'correo' => $faker->word,
        'division' => $faker->word,
        'reputacion' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
