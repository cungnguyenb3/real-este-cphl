<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Image;
use DB;
use Hash;
use Auth;
use Session;
use App\Blog;
use App\User;


class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function postProperty(Request $req){
        $post = new Post();
        $post->name = $req->txtName;
        $post->price = $req->txtPrice;
        $post->description = $req->txtDescription;
        $post->location = $req->txtAddress;
        $post->room = $req->slcRoom;
        $post->number_of_bedroom = $req->selBedroom;
        $post->number_of_bathroom = $req->selBathroom;
        $post->area = $req->txtArea;
        $post->property_type_id = $req->selPropertyType;
        $post->building_age = $req->txtBuildingAge;
        $post->transaction_type = $req->selTransactionType;
        $post->status = 0;
        $post->user_id = $req->user_id;
        if (isset($req->images)) {
            $post->main_image = $req->images[0];
        }
        $post->save();

        if (isset($req->images)) {
            $arr_image = [];
            foreach ($req->images as $key => $value) {
                $arr_image[] = [
                    'image' => $value,
                    'post_id' => $post->id
                ];
            }
            Image::insert($arr_image);
        }
        
        return redirect()->back()->with('thanhcong','Create new post succesfull');
    }

    public function uploadImage(Request $req){
        $post = Post::find(postID);
        $image = $req->file('file');
    }

    public function postSearch(Request $req){
        $area_from = $req->area_from;
        $property_status = $req->property_status;
        $building_age = $req->building_age;
        $property_types = $req->property_types;
        $bedrooms = $req->bedrooms;
        $bathrooms = $req->bathrooms;
        $min_price = $req->min_price;
        $max_price = $req->max_price;
        
        $result = DB::table('posts')
            ->join('users', 'posts.user_id', '=', 'users.id')
            ->select('users.username AS username','posts.*')
            ->where('area','=',$area_from)
            ->where('transaction_type','=',$property_status)
            ->where('building_age','=',$building_age)
            ->where('property_type_id','=',$property_types)
            ->where('number_of_bedroom','=',$bedrooms)
            ->where('number_of_bathroom','=',$bathrooms)
            ->where('number_of_bathroom','=',$bathrooms)
            ->whereBetween('price', [$min_price, $max_price])
            ->get();

        return view('pages.search',compact('result'));
    }

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
