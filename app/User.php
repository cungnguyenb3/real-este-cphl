<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use App\Model;
class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'users'; // Tên của bảng trong database
    protected $guarded = ['username','first_name','last_name','gender', 'email', 'phone', 'address', 'password', 'role_id']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

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
