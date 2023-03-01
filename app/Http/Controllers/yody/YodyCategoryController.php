<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Picture;

class YodyCategoryController extends Controller
{
    public function category($slug, $id, Request $request) {
        $arrCat = Categories::find($id);
        $arrClassify = Categories::where('parent_id', $id);
        // foreach($arrClassify as $classify) {
        //     $arrClassify = Categories::where('parent_id', $classify->cat_id);
        // }
        
        //$arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->where('c.cat_id', $id)->orderBy('p.product_id')->select('p.*')->get();
    
        
    
        $arrProducts = Product::where(function($query) use($request) {
            if($request->get('color')) {
                $query->whereHas('properties', function ($query) use($request) {
                    foreach(explode(',',$request->get('color')) as $key => $color) {
                        if($key == 0) {
                            $query->where('properties', 'like', "%$color%");
                        } else {
                            $query->orWhere('properties', 'like', "%$color%");
                        }
                        
                    }
                });
            }
        })->orderBy('product_id')->get();
        $arrCats = Categories::where('parent_id', $id)->inRandomOrder()->limit(5)->get();
        $arrPictures = Picture::all();
        return view('yody.category', compact('arrCat', 'arrProducts', 'arrPictures', 'arrCats'));
    }

    public function order($id, Request $request) {
        if($_GET['color'] != 0) {
            $queryProduct = Product::where(function($query) use($request) {
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
            });
        } else {
            $queryProduct = Product::query();
        }

        if(isset($_GET['sort'])) {
            $order_by = $_GET['sort'];
            if($order_by == 'default') {
                $arrProducts = $queryProduct->orderBy('product_id', 'DESC')->get();
            } else if($order_by == 'alpha-asc') {
                $arrProducts = $queryProduct->orderBy('name', 'ASC')->get();
            } else if($order_by == 'alpha-desc') {
                $arrProducts = $queryProduct->orderBy('name', 'DESC')->get();
            } else if($order_by == 'price-asc') {
                $arrProducts = $queryProduct->orderBy('price', 'ASC')->get();
            } else if($order_by == 'price-desc') {
                $arrProducts = $queryProduct->orderBy('price', 'DESC')->get();
            } else if($order_by == 'created-desc') {
                $arrProducts = $queryProduct->orderBy('product_id', 'DESC')->get();
            }
        }

        // $queryProduct = $queryProduct->paginate(20)->appends(request()->query());
        // $arrProducts = $arrProducts->get();
        // dd($arrProducts);

        $arrCat = Categories::find($id);
        $arrPictures = Picture::all();
        return view('yody.order', compact('arrProducts', 'arrCat', 'arrPictures'));
    }
}
