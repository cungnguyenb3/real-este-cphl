<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Validation;

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
    
    public function getRent(){
        $rent = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('users.username AS username','posts.*')
        ->where('transaction_type','=',0)
        ->take(10)
        ->get()
        ->toArray();

        return view('pages.rent',compact('rent'));
    }

    public function getChangePassword(){
        return view('pages.change-password');
    }
    
    public function getMyProperties(){
        $myProperties = Post::all();
        return view('pages.my-properties',compact('myProperties'));
    }

    public function admin_credential_rules(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'new-password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current-password' => 'required',
            'new-password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',     
        ], $messages);

        return $validator;
    }
    
    public function postChangePassword(Request $request) {
        if(Auth::Check())
        {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if($validator->fails())
            {
            return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
            }
            else
            {  
            $current_password = Auth::User()->password;           
            if(Hash::check($request_data['current-password'], $current_password))
            {           
                $user_id = Auth::User()->id;                       
                $obj_user = User::find($user_id);
                $obj_user->password = Hash::make($request_data['password']);;
                $obj_user->save(); 
                return "ok";
            }
            else
            {           
                $error = array('current-password' => 'Please enter correct current password');
                return response()->json(array('error' => $error), 400);   
            }
            }        
        }
        else
        {
            return redirect()->route('index');
        } 
    }
}
