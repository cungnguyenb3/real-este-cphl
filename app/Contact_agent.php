<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_agent extends Model
{
    protected $table = 'contact_agents'; // Tên của bảng trong database
    protected $guarded = ['name','email','phone','content','post_id']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function posts() {
        return $this->belongsTo('App\Post');
    }
}
