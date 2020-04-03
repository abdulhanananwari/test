<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model {
	protected $table = 'users';
	protected $guarded = ['created_at', 'updated_at'];

	public function post() {
		return $this->hasOne('App\PostModel', 'user_id', 'id');
	}
}
