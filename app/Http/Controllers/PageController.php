<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property_type;
use App\Post;
use App\Blog;
use App\Image;
use Hash;
use Auth;
use Session;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use DB;

class PageController extends Controller
{
  	public function getIndex(){
		$post = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('users.username AS username','posts.*')
        ->where('status','=',1)
        ->orderBy('created_at', 'desc')
        ->take(6)
        ->get()
        ->toArray(); 

        $blog = Blog::all();
        $user = User::all();

		return view('pages.index', compact('post','blog','user'));
	}

	public function getAbout(){
		return view('pages.about');
    }
    
    public function getBlogDetail($slug){
        $blog = Blog::where('slug',$slug)->first();
        $user = user::all();
        $blogPopular = Blog::where('slug','<>',$slug)->limit(3)->get();
        return view('pages.blog-detail',compact('blog','user','blogPopular'));
		
	}

    public function getPropertiesDetails($slug){
        $postPopular = Post::where('slug','<>',$slug)->limit(3)->get();
        $post = Post::where('slug',$slug)->first();

        $image = Image::where('post_id',$post->id)->get();
		return view('pages.properties-details', compact('image','post','postPopular'));
	}

    
	public function getSubmitProperty(){
		return view('pages.submit-property');
	}

    //Login
	public function getLogin(){
		return view('pages.login');
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
                return redirect()->route('index')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']); 
        }
        
    }
    
    //Register
	public function getRegister(){
		return view('pages.register');
	}
	public function postRegister(Request $req){
       $this->validate($req,
        [
            'username'=>'required|unique:users,username',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            'confirm_Password'=>'required|same:password'
        ],
        [
            'username.required'=>'Vui lòng nhập tên',
            'username.unique'=>'Email đã có người sử dụng',
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'confirm_Password.same'=>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự'
        ]);
			
        $user = new User();
        $user->username = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->role_id=3;
        $user->save();
        return redirect()->route('getLogin')->with('thanhcong','Tạo tài khoản thành công');
    }

    //Logout
    public function postLogout(){
        Auth::logout();
        return redirect()->route('getLogin');
    }
    public function getMyPost(){
        $post = Post::all();
        return view('layout.post.myPost', compact('post'));
    }

    public function getUserProfile(){
		return view('pages.user-profile');
	}

    /*get property*/
    public function getProperty($slug)
    {
       $property = DB::table('property_types')->where('slug','=', $slug)->select('id')->first();

       $sale = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('users.username AS username','posts.*')
        ->where('posts.property_type_id','=',$property->id)
        ->orderBy('created_at', 'desc')
        ->paginate(2);
       return view('pages.sale',compact('sale'));
    }

    public function getUpdate(){
        if(Auth::check())
        {
            return view('pages.user-profile')->with('data',Auth::user()->profile);
        }
        else
        {
            return redirect()->back();
        }                 
    }
    public function postUpdate(Request $req){
        $this->validate($req,
            [
                'email'=>'email'
            ],
            [
                'email.email'=>'Email is not the correct format'
            ]
        );
        $user_id = Auth::user()->id;
        DB::table('users')->where('id',$user_id)->update($req->except('_token'));
        return redirect()->back()->with('thanhcong','Successfully updated your account');  
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function getBlog(){
        $user = user::all();
        $blog = Blog::all();
        $blogPopular = Blog::limit(3)->get();
        return view('pages.blog',compact('blog','user','blogPopular'));
    }
}
