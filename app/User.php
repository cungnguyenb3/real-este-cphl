<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'users'; // Tên của bảng trong database
    protected $guarded = ['username','first_name','last_name','gender', 'email', 'phone', 'address', 'password', 'role_id']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function user_roles() {
        return $this->belongsTo('App\User_role');
    }

    public function blogs() {
        return $this->hasMany('App\Blog','user_id','id');
    }

    public function posts() {
        return $this->hasMany('App\Post','user_id','id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
