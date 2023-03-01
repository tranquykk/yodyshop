<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classify;
use Illuminate\Support\Facades\DB;
use App\Models\Picture;
use App\Models\Categories;
use App\Models\Group;
use App\Models\Product;

class YodyGroupController extends Controller
{
    public function group($slug, $id, Request $request) {
        $arrPictures = Picture::all();
        $arrCats = Categories::where('parent_id', $id)->get();
        $arrCat = Categories::find($id);
        if(isset($_GET['color']) && $_GET['color'] != 0) {
            $arrProducts = Product::where(function($query) use($request) {
                if($_GET['color'] != 0) {
                    $query->whereHas('properties', function ($query) use($request) {
                        foreach(explode(',',$_GET['color']) as $key => $color) {
                            if($key == 0) {
                                $query->where('properties', 'like', "%$color%");
                            } else {
                                $query->orWhere('properties', 'like', "%$color%");
                            }
                            
                        }
                    });
                }
            })->where('cat_id', $id)->get();
        } else {
            $arrProducts = Product::where('cat_id', $id)->get();
        }
        
        return view('yody.group',  compact('arrProducts', 'arrPictures', 'arrCat'));
    }
}
