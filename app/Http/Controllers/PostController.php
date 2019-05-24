<?php

namespace App\Http\Controllers;
use Illuminate\Support\MessageBag;
use UserRequest;
use Illuminate\Http\Request;
// use Request;
use App\blog;
use App\user;
use App\post;

use Hash;
use Auth;
use Session;
class PostController extends Controller
{

    public function postEditBlog($id, Request $req){
    	 $this->validate($req,
            [
               
                'content'=>'required|min:10',
                'image' => 'required' 
            ],
            [          
               
                'content.min'=>'content ít nhất 100 kí tự',
                'content.required'=>'content không được trống',

                'image.required' => 'image không được trống'
            ]);
		$blog = blog::find($id);
		$image = 'homeland/images/'. $req->image;
		$blog->title = $req->title;
		$blog->content = $req->content;
		$blog->image = $req->image;
		$blog->save();
		return redirect()->route('adminshowblog')->with('thanhcong','Sửa blog thành công!');
	}
	public function postEditProfile( Request $req){
 		$this->validate($req,
            [
                'email'=>'required|email:users,email',
                
                'username'=>'required',
                
                'phone'=>'required',
                'address'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                
                'username.required'=>'Vui lòng nhập username ',
                
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'address.required'=>'Vui lòng nhập Address'
            ]);
        $user = user::find(Auth::user()->id);
        $user->username = $req->username;
        $user->email =  $req->email;
        
        $user->phone =  $req->phone;
        $user->address =  $req->address;
        $user->save();
        return redirect()->route('adminEditProfile')->with('thanhcong','Sửa profile thành công!');
    }
    
    public function postAcceptPost($id){
    	$post = post::find($id);
    	$post->status = 1;
    	$post->save();
    	return redirect()->route('post');
    }
    public function postDeletePost($id){
    	$post = post::find($id);
    	$post->status = 2;
    	$post->save();
    	return redirect()->route('post');
    }
    public function postEditUser($id, Request $req){
         $this->validate($req,
            [
                'email'=>'required|email:users,email',
                'username'=>'required',
       
                'phone'=>'required',
                'address'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                
                'username.required'=>'Vui lòng nhập số điện thoại',
                
                
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'address.required'=>'Vui lòng nhập Address'
            ]);
        $user = user::find($id);
        $user->username = $req->username;
        $user->email =  $req->email;
        
        $user->phone =  $req->phone;
        $user->address =  $req->address;
        $user->save();
        return redirect()->route('user')->with('thanhcong','Sửa user thành công!');
    }


}
