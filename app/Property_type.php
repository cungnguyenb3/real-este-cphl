<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_type extends Model
{
    protected $table = 'property_types'; // Tên của bảng trong database
    protected $guarded = ['name','description']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function posts() {
    	return $this->hasMany('App\Post','property_type_id','id');
    }
}
