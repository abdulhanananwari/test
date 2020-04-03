<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\PostModel::class, 5)->create();

	}
}
