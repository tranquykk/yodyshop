<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
use App\Models\Picture;
use App\Models\Rating;

class YodyProductDetailController extends Controller
{
    public function detail($slug, $id) {
        $arrProduct = Product::find($id);
        // echo $arrProduct->product_id;
        // die();
        $cat_id = $arrProduct->cat_id;
        $arrCat = Categories::find($cat_id);
        $classify_group_id = $arrProduct->classify_group_id;
        $arrGroup = Group::find($classify_group_id);
        $arrProductConnect = Product::where('cat_id', $cat_id)->where('product_id', '!=', $id)->get();
        $arrRatings = Rating::where('product_id', $id)->orderBy('rating_id', 'DESC')->get();
        // $cat_id = $arrClassify->cat_id;
        // $arrCat = Categories::find($id);
        // $arrGroups = Group::where('classify_id', $id)->get();
        // $arrProducts = DB::table('product as p')->join('classify_group as cg', 'p.classify_group_id', '=', 'cg.classify_group_id')->join('classify as cl', 'cg.classify_id', '=', 'cl.classify_id')->join('categories as c', 'cl.cat_id', '=', 'c.cat_id')->where('cg.classify_group_id', $id)->orderBy('p.product_id')->select('p.*', 'c.name as cname')->get();
        $arrPictures = Picture::all();
        return view('yody.detail', compact('arrProduct', 'arrCat', 'arrProductConnect', 'arrPictures', 'arrRatings'));
    }

    public function addRating($id) {
        $fullname = $_GET['fullname'];
        // dd($fullname);
        $action = $_GET['action'];
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $comment = $_GET['comment'];
        $parent_id = $_GET['parent_id'];

        $dataRating = [
            'product_id'=> $id,
            'phone'     => $phone,
            'email'     => $email,
            'fullname'  => $fullname,
            'rating_action' => $action,
            'comment'   => $comment,
            'parent_id' => $parent_id,
        ];
        $arrProduct = Product::find($id);
        $result = Rating::insert($dataRating);
        if($result==true) {
            $arrRatings = Rating::where('product_id', $id)->orderBy('rating_id', 'DESC')->get();
            return view('yody.rating-item', compact('arrRatings', 'arrProduct'));
        }
    }

    public function addComment($id) {
        $fullname = $_GET['fullname'];
        $action = 5;
        $phone = $_GET['phone'];
        $email = $_GET['email'];
        $comment = $_GET['comment'];
        $product_id = $_GET['product_id'];

        $dataComment = [
            'product_id'=> $product_id,
            'phone'     => $phone,
            'email'     => $email,
            'fullname'  => $fullname,
            'rating_action' => $action,
            'comment'   => $comment,
            'parent_id' => $id,
        ];

        $result = Rating::insert($dataComment);
        if($result==true) {
            $arrComments = Rating::where('parent_id', $id)->orderBy('rating_id', 'DESC')->get();
            return view('yody.comment-item', compact('arrComments'));
        }
    }
}
