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

class YodyClassifyController extends Controller
{
    public function classify($slug, $id, Request $request) {
        $arrCats = Categories::where('parent_id', $id)->get();
        $arrPictures = Picture::all();
        // dd($_GET['color']);
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
            })->whereIn('cat_id', $arrCats->pluck('cat_id'))->get();
        } else {
            $arrProducts = Product::whereIn('cat_id', $arrCats->pluck('cat_id'))->get();
        }

        // $arrProducts = Product::whereIn('cat_id', $arrCats->pluck('cat_id'))->orderBy('product_id')->get();
        $arrCat = Categories::find($id);
        return view('yody.classify', compact('arrProducts', 'arrPictures', 'arrCats', 'arrCat'));
    }

    public function order($id, Request $request) {
        $arrCats = Categories::where('parent_id', $id)->get();
        if(count($arrCats) == 0) {
            // $queryProduct = Product::where('cat_id', $id)->orderBy('product_id')->get();
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
                })->where('cat_id', $id);
            } else {
                $queryProduct = Product::where('cat_id', $id);
            }
        } else {
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
                })->whereIn('cat_id', $arrCats->pluck('cat_id'));
            } else {
                $queryProduct = Product::whereIn('cat_id', $arrCats->pluck('cat_id'));
            }
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

        // dd($arrProducts);
        // $queryProduct = $queryProduct->paginate(20)->appends(request()->query());
        // $arrProducts = $arrProducts->get();
        // dd($arrProducts);

        $arrCat = Categories::find($id);
        $arrPictures = Picture::all();
        return view('yody.order', compact('arrProducts', 'arrCat', 'arrPictures'));
    }
}
