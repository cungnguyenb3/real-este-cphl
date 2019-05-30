<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs'; // Tên của bảng trong database
    protected $guarded = ['title','content','writing_date','slug','user_id']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function users() {
        return $this->belongsTo('App\Users');
    }
}
