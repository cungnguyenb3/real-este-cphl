<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    protected $table = 'user_roles'; // Tên của bảng trong database
    protected $guarded = ['role']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function users() {
    	return $this->hasMany('App\User','role_id','id');
    }
}
