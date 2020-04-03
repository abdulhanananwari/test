<?php

namespace App\Http\Controllers;

use App\CommentModel;
use App\PostModel;
use App\UserModel;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController {

	public function getIndex() {

		$contentPosts = PostModel::with('user')->get();
		$userLists = UserModel::with('post.comments')->get();
		$commentGuests = CommentModel::whereHas('post', function ($query) {
			$query->whereNull('user_id');
		})->get();

		$viewData = [
			'contentPosts' => $contentPosts,
			'userLists' => $userLists,
			'commentGuests' => $commentGuests,
		];

		return view('index')
			->with('viewData', $viewData);
	}
}
