<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\User;
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

$factory->define(App\UserModel::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => Hash::make('password'),
		'created_at' => \Carbon\Carbon::now(),
		'updated_at' => \Carbon\Carbon::now(),
	];
});

// <?php

// /** @var \Illuminate\Database\Eloquent\Factory $factory */

// use Faker\Generator as Faker;

// $factory->define(PostModel::class, function (Faker $faker) {
// 	return [
// 		'user_id' => factory(UserModel::class)->create()->id,
// 		'title' => $faker->title,
// 		'slug' => $faker->slug,
// 		'content' => $faker->paragraph,
// 		'created_at' => \Carbon\Carbon::now(),
// 		'updated_at' => \Carbon\Carbon::now(),

// 	];
// });
