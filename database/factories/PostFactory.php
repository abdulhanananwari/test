<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\PostModel::class, function (Faker $faker) {
	return [
		'user_id' => factory(App\UserModel::class)->create()->id,
		'title' => $faker->title,
		'slug' => $faker->slug,
		'content' => $faker->paragraph,
		'created_at' => \Carbon\Carbon::now(),
		'updated_at' => \Carbon\Carbon::now(),

	];
});
