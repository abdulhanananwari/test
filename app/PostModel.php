<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model {
	protected $table = 'posts';
	protected $guarded = ['created_at', 'updated_at'];

	public function user() {
		return $this->belongsTo('App\UserModel', 'user_id');
	}
	public function comments() {
		return $this->hasMany('App\CommentModel', 'post_id');
	}
}
