<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\CommentModel::class, function (Faker $faker) {
	return [
		'post_id' => factory(App\PostModel::class)->create()->id,
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'website' => 'https://abdulhanan.web.id',
		'comment' => $faker->text,
		'created_at' => \Carbon\Carbon::now(),
		'updated_at' => \Carbon\Carbon::now(),
	];
});
