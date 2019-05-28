<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Image;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['title'] = 'List products';
        $productsInfo = DB::table('products')
            ->orderBy('id', 'desc')
            ->paginate(10);
        $this->data['listProduct'] = $productsInfo;
        return view('admin.product.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
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


}
