<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PropertiesListController extends Controller
{
    public function getListProperty(){
        $post = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('users.username AS username','posts.*')
        ->get()
        ->toArray();

        return view('pages.properties-list',compact('post'));
	}
}
