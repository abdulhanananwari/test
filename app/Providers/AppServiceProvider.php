<?php

namespace App\Providers;

use App\Observers\PostObserver;
use App\Observers\CommentObserver;
use App\PostModel;
use App\CommentModel;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		PostModel::observe(PostObserver::class);
		CommentModel::observe(CommentObserver::class);
	}
}
