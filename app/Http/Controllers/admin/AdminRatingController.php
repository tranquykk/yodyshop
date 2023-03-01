<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rating;

class AdminRatingController extends Controller
{
    public function index() {
        $objRatings = DB::table('ratings as r')->join('product as p', 'r.product_id', '=', 'p.product_id')->orderBy('r.rating_id', 'DESC')->select('r.*', 'p.name as pname')->paginate(5);
        return view('admin.rating.index', compact('objRatings'));
    }

    public function del($id) {
        $objRating = Rating::find($id);
        
        $result = $objRating->delete();
        if($result) {
            return redirect()->route('admin.rating.index')->with('msg', ' Xóa thành công');
        }
    }

    // public function getSearch(Request $request) {
    //     $searchRatings = DB::table('ratings as r')->join('product as p', 'r.product_id', '=', 'p.product_id')->where('p.name', 'like', '%'.$key.'%')->orderBy('r.rating_id', 'DESC')->select('r.*', 'p.name as pname')->get();
    //     return view('admin.rating.index', compact('searchRatings'));
    // }
}
