<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Picture;
use Illuminate\Support\Facades\Auth;

class YodyIndexController extends Controller
{
    public function index() {
        

        // $sub_menu = Categories::where('parent_id', '3')->with('classifies.classifyGroups')->get();
        $objProductNews = Product::orderBy('product_id', 'DESC')->limit(10)->get();
        $arrPictures = Picture::all();
        $arrCats = Categories::where('parent_id', '0')->where('cat_id', '!=', '4')->get();
        return view('yody.index', compact('arrCats', 'objProductNews', 'arrPictures'));
    }
}
