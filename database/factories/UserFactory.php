<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->unique()->safeEmail,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'phone' => '3' . rand(100000000, 999999999),
        'date_to_entry' => $faker->dateTime('now'),
        'url_avatar' => $faker->imageUrl(150, 150),
        'profile_id' => rand(1, 4),

        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Product::class, function (Faker $faker){
  $fakePrice = rand(1000, 500000);
    return [
      'id' => strtoupper(str_random(5)) . '_' . rand(1000, 9999),
      'description' => $faker->words(4, true),
      'purchase_price' => $fakePrice,
      'sale_price' => $fakePrice  * 1.3,
      'url_image' => $faker->imageUrl(550, 300),
      'tax' => 0.19,
    ];
});


$factory->define(App\RepairProcess::class, function(Faker $faker){
    $option = ['Repair', 'Review', 'Replace', 'Recharge'];
    return[
      'name' => $option[rand(0, 3)] . ' ' . $faker->text(15),
    ];
});


$factory->define(App\Client::class, function (Faker $faker) {
    return [
      'id' => rand(800000000, 999999999) . '-' . rand(0, 9),
      'name' => $faker->company,
      'address' => $faker->address,
      'city' => rand(0, 1000),
      'cellphone' => '3' . rand(100000000, 999999999),
      'phone' => rand(1000000, 9999999),
      'contact_name' => $faker->name,
      'extension_number' => rand(1000, 9999),
    ];
});


$factory->define(App\OrderStatus::class, function(Faker $faker){
  $status = ['On hold', 'In Process', 'Rejected', 'Success'];
  return[
      'name' => $status[rand(0, 3)],
  ];
});


$factory->define(App\Supply::class, function(Faker $faker){
  $meassure = ['Gram', 'Kilogram', 'Liter', 'Mililiter'];
  return[
      'detail' => $faker->words(4, true),
      'unit_of_measurement' => $meassure[rand(0, 3)],
  ];
});
