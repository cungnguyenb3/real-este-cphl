<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images'; // Tên của bảng trong database
    protected $guarded = ['slug','title','link','image','post_id']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function posts() {
        return $this->belongsTo('App\Post');
    }
}
