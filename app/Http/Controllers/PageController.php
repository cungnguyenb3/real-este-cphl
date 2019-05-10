<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
		return view('pages.homepage');
	}
	public function about(){
		return view('pages.about');
	}
	public function contact(){
		return view('pages.contact');
	}
	public function blog(){
		return view('pages.blog');
	}
	public function properties(){
		return view('pages.properties');
	}
	public function rent(){
		return view('pages.rent');
	}
	public function buy(){
		return view('pages.buy');
	}
	public function login(){
		return view('pages.login');
	}
	public function register(){
		return view('pages.register');
	}
}
