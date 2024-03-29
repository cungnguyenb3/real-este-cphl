<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Blog;
use App\User;
use App\Post;
use App\Image;
use App\Property_type;
use Illuminate\Support\MessageBag;
use UserRequest;

use Carbon\Carbon;
use Session;

class AdminController extends Controller
{
    public function store(Request $request){
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

    }
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
        if(Auth::user()->id == 1){
            $user = user::where('role_id','<>','1')->orderBy('role_id', 'asc')->get(); //nếu là superadmin thì get admin và user 
        }else{
            $user = user::where('role_id','3')->orderBy('role_id', 'asc')->get(); //nếu là admin thì chỉ get user 
        }
    	return view('admin.user', compact('user'));
    }
    

    public function postRegister(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'username'=>'required|unique:users',
                're_password'=>'required|same:password',
                'role_id'=>'required',
                'address'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'role_id.required'=>'Vui lòng chọn loại user',
                'address.required'=>'Vui lòng nhập Address',
                'username.unique'=>'username da co nguoi dung',
                'username.required'=>'Vui lòng nhập username'

            ]);
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->role_id= $req->role_id;
        $user->address= $req->address;

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
        return redirect()->route('adminlogin');
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
        $blog = new Blog();
        $blog->title = $req->title;
        $s = str_slug($req->title).Carbon::now();
        $blog->slug = $s;
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


    public function getPost(){
        $post= Post::where('status','0')->get();
        $image = Image::all();
        $user = User::all();
        $property=Property_type::all();
        return view('admin.post', compact('post', 'image', 'user','property'));
    }
    public function getDeleteUser($id) {
        $user = User::find($id);
        // File::delete('public/backend/images/'.$product->image);
        $user->delete($id);
        return back()->with('thanhcong','xóa user thành công');
    }
    
	
    public function getEditUser($id){
        $user = User::find($id);
        return view('admin.editUser', compact('user'));
    }
    public function postEditUser($id, Request $req){
        $this->validate($Request,
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
        $user = User::find($id);
        $user->username = Request::input('username');
        $user->email = Request::input('email');
        
        $user->phone = Request::input('phone');
        $user->address = Request::input('address');
        $user->save();
        return redirect()->route('user')->with('thanhcong','Sửa user thành công!');
    }
    

}