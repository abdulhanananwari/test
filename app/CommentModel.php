<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model {
	protected $table = 'comments';
	protected $guarded = ['created_at', 'updated_at'];

	public function post() {
		return $this->belongsTo('App\PostModel', 'post_id');
	}

}
