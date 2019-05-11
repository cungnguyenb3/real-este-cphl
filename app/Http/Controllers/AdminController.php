<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\blog;
use App\User;
use Carbon\Carbon;
use Session;

class AdminController extends Controller
{
	public function getRegister(){
    	return view('admin.register');
    }
	public function getLogin(){
    	return view('admin.login');
    }
    public function getIndex(){
    	return view('admin.index');
    }
    public function getProfile(){
    	return view('admin.profile');
    }
    public function getUser(){
    	return view('admin.user');
    }
    public function getPost(){
    	return view('admin.post');
    }

    public function postRegister(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'username'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->role_id=2;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        $user = User::where([
                ['email','=',$req->email]
               	
            ])->first();

        if($user){
            if(Auth::attempt($credentials)){

            return redirect()->route('adminindex')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        }
        
    }
    public function postLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function getCreate(){
    	return view('admin.createAdmin');
    }
    public function postCreate(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'username'=>'required',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
       
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
    public function getBlog(){
    	return view('admin.createBlog');
    }
    public function postBlog(Request $req){
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
        $blog = new blog();
        $blog->title = $req->title;
        $blog->image = $req->image;
        $blog->content = $req->content;
        $blog->user_id = Auth::user()->id;
       	$blog->writing_date=Carbon::now();
        $blog->save();
        return redirect()->back()->with('thanhcong','Tạo blog thành công');
    }
    public function getShowblog(){
    	$blog =blog::all();
    	return view('admin.showBlog', compact('blog'));
    }
    public function getDeleteBlog($id) {
		$blog = blog::find($id);
		// File::delete('public/backend/images/'.$product->image);
		$blog->delete($id);
		return back()->with('thanhcong','xóa blog thành công');
	}
	public function getEditBlog($id){
		$blog = blog::find($id);
		return view('admin.editBlog', compact('blog'));
	}
	public static function postEditBlog($id, Request $req){
		$blog = blog::find($id);
		$image = 'homeland/images/'. Request::input('image');
		$blog->title = Request::input('title');
		$blog->content = Request::input('content');
		$blog->image = Request::input('image');
		// $product->content = Request::input('content');

		
		 $cont = static::$apiContext;

		$blog->save();
		return redirect()->route('adminshowblog')->with('thanhcong','Sửa sản phẩm thành công!');
	}

}
