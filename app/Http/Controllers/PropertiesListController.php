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
        ->where('status','=',0)
        ->take(5)
        ->get()
        ->toArray();

        return view('pages.properties-list',compact('post'));
    }
    
    public function getSale(){
        $sale = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('users.username AS username','posts.*')
        ->where('transaction_type','=',0)
        ->take(10)
        ->get()
        ->toArray();

        return view('pages.sale',compact('sale'));
	}
}
