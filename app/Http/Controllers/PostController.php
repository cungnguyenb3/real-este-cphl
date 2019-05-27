<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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

    public function create()
    {
        // $this->data['title'] = 'Add new product';
        // $listCate = DB::table('categories')->orderBy('id', 'desc')->get();
        // $this->data['listCate'] = $listCate;
        // return view('admin.product.create', $this->data);
    }

    public function postProperty(Request $req){
        $post = new Post();
        $post->name = $req->txtName;
        $post->price = $req->txtPrice;
        $post->description = $req->txtDescription;
        $post->location = $req->txtAddress;
        
        $file_name = $req->file(postImages('images[]'))->getClientOriginalName();
		$post->main_image = $file_name;
        $req->file(postImages('images[]'))->move('public/img-home',$file_name);
        
        $post->room = $req->slcRoom;
        $post->number_of_bedroom = $req->selBedroom;
        $post->number_of_bathroom = $req->selBathroom;
        $post->area = $req->txtArea;
        $post->property_type_id = $req->selPropertyType;
        $post->building_age = $req->txtBuildingAge;
        $post->transaction_type = $req->selTransactionType;
        $post->status = 0;
        $post->user_id = $req->user_id;
        $post->save();
        return redirect()->back()->with('thanhcong','Create new post succesfull');
    }
}
