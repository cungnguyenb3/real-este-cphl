<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    protected $table = 'slides'; // Tên của bảng trong database
    protected $guarded = ['post_id','pos']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function posts() {
        return $this->belongsTo('App\Post');
    }
}
