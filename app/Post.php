<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; // Tên của bảng trong database
    protected $guarded = ['name','price','description','location', 'main_image', 'number_of_bedroom', 'number_of_bathroom','area', 'property_type_id', 'building_age', 'transaction_type', 'user_id']; // Lấy hết các trường trong bảng đó

    public $timestamps = true;

    public function users() {
        return $this->belongsTo('App\Users');
    }

    public function property_types() {
        return $this->belongsTo('App\Property_type');
    }

    public function contact_agents() {
        return $this->hasMany('App\Contact_agent','post_id','id');
    }

    public function images() {
        return $this->hasMany('App\Image','post_id','id');
    }

    public function slides() {
        return $this->hasMany('App\Slides','post_id','id');
    }



}







