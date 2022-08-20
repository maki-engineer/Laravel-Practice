<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92I……略……', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Person::class, 
      function (Faker $faker) {
   return [
       'name' => $faker->name,
       'mail' => $faker->safeEmail,
       'age' => random_int(1,99),
   ];
});