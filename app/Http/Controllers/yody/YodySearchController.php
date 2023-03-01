<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Picture;

class YodySearchController extends Controller
{
    public function getSearch(Request $request) {
        $arrProducts = Product::where('name', 'like', '%'.$request->key.'%')->orWhere('price', $request->key)->get();
        // dd($arrProducts);
        $arrPictures = Picture::all();
        // return redirect()->route('yody.cart')->with('arrProducts', 'Thêm danh mục thành công');
        return view('yody.search', compact('arrProducts', 'arrPictures'));
    }
}
