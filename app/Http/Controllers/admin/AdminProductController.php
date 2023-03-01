<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Group;
use App\Models\Picture;
use App\Models\Rating;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AdminProductRequest;
use App\Http\Requests\AdminPictureRequest;

class AdminProductController extends Controller
{
    public function index() {

        if(isset($_GET['order_by'])) {
            $order_by = $_GET['order_by'];
            if($order_by == 'desc') {
                $arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->orderBy('price', 'DESC')->select('p.*', 'c.name as cname')->paginate(10)->appends(request()->query());
            } else if($order_by == 'asc') {
                $arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->orderBy('price', 'ASC')->select('p.*', 'c.name as cname')->paginate(10)->appends(request()->query());
            } else if($order_by == 'a-z') {
                $arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->orderBy('p.name', 'ASC')->select('p.*', 'c.name as cname')->paginate(10)->appends(request()->query());
            } else if($order_by == 'z-a') {
                $arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->orderBy('p.name', 'DESC')->select('p.*', 'c.name as cname')->paginate(10)->appends(request()->query());
            }
        } else {
            $arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->orderBy('product_id', 'DESC')->select('p.*', 'c.name as cname')->paginate(10);
        }
        return view('admin.product.index', compact('arrProducts'));
    }

    public function getSearch(Request $request) {
        // $arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->orderBy('product_id', 'DESC')->select('p.*', 'c.name as cname')->paginate(10);
        $arrProducts = DB::table('product as p')->join('categories as c', 'p.cat_id', '=', 'c.cat_id')->where('p.name', 'like', '%'.$request->key.'%')->orWhere('price', $request->key)->select('p.*', 'c.name as cname')->get();
        return view('admin.product.index', compact('arrProducts'));
    }

    public function add() {
        $arrCats = Categories::all();
        $arrGroups = Group::all();
        return view('admin.product.add', compact('arrGroups', 'arrCats'));
    }

    public function postAdd(AdminProductRequest $request) {
        $picture = '';
        if($request->picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
        }

        $dataInsert = [
            'name'          => $request->name,
            'price'         => $request->price,
            'sale_off'      => $request->sale_off,
            'picture'       => $picture,
            'product_detail'=> $request->product_detail,
            'cat_id'        => $request->cat_id,
        ];
        $result = Product::insert($dataInsert);
        if($result == true) {
            return redirect()->route('admin.product.index')->with('msg', 'Thêm thành công');
        }
    }

    public function edit($id) {
        $arrCats = Categories::all();
        $arrGroups = Group::all();
        $arrProduct = Product::find($id);
        return view('admin.product.edit', compact('arrProduct', 'arrGroups', 'arrCats'));
    }

    public function postEdit($id, AdminProductRequest $request) {
        $arrProduct = Product::find($id);

        $picture = $request->new_picture;
        if($picture != '') {
            $tmp = $request->new_picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
            $oldPic = $arrProduct->picture;
            if($oldPic != '') {
                Storage::delete('public/templates/yody/images/'.$oldPic);
            }
            $arrProduct->picture = $picture;
        }
        $arrProduct->name = $request->name;
        $arrProduct->price = $request->price;
        $arrProduct->sale_off = $request->sale_off;
        $arrProduct->attributes = $request->attribute;
        $arrProduct->product_detail = $request->product_detail;
        $arrProduct->cat_id = $request->cat_id;

        if($arrProduct->update()) {
            return redirect()->route('admin.product.index')->with('msg', 'Sửa thành công');
        } else {
            return redirect()->route('admin.product.index')->with('msg', 'Có lỗi khi sửa');
        }
    }

    public function del($id) {
        $arrPictures = Picture::where('product_id', $id)->get();
        foreach($arrPictures as $arrPicture) {
            if($arrPicture->picture != '') {
                unlink('storage/templates/ablog/images/'.$arrPicture->picture);
            }
            $arrPicture->delete();
        }

        $arrRatings = Rating::where('product_id', $id)->get();
        foreach($arrRatings as $arrRating) {
            $arrRating->delete();
        }

        $arrProduct = Product::find($id);
        $picture = $arrProduct->picture;
        if($picture != '') {
            Storage::delete('public/templates/yody/images/'.$picture);
        }

        if($arrProduct->delete()) {
            return redirect()->route('admin.product.index')->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('admin.product.index')->with('msg', 'Có lỗi khi xóa');
        }
    }

    public function picture($id) {
        $arrProduct = Product::find($id);
        $arrPictures = Picture::where('product_id', $id)->get();
        // dd($arrPictures->toArray());
        return view('admin.product.picture.index', compact('arrPictures', 'arrProduct'));
    }

    public function addPicture($id) {
        $arrProduct = Product::find($id);
        return view('admin.product.picture.add', compact('arrProduct'));
    }

    public function postAddPicture(AdminPictureRequest $request, $id) {
        $arrProduct = Product::find($id);

        $picture = $request->picture;
        if($picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
        }

        $dataInsert = [
            'picture'   => $picture,
            'product_id'=> $arrProduct->product_id,
        ];

        $result = Picture::insert($dataInsert);
        if($result == true) {
            return redirect()->route('admin.product.picture.index', ['id' => $arrProduct->product_id])->with('msg', 'Thêm thành công');
        }
    }

    public function editPicture($id) {
        $arrPicture = Picture::find($id);
        $product_id = $arrPicture->product_id;
        $arrProduct = Product::find($product_id);
        return view('admin.product.picture.edit', compact('arrPicture', 'arrProduct'));
    }

    public function postEditPicture($id, AdminPictureRequest $request) {
        $arrPicture = Picture::find($id);

        $picture = $request->new_picture;
        if($picture != '') {
            $tmp = $request->new_picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
            $oldPic = $arrPicture->picture;
            if($oldPic != '') {
                Storage::delete('public/templates/yody/images/'.$oldPic);
            }
            $arrPicture->picture = $picture;
        }

        if($arrPicture->update()) {
            return redirect()->route('admin.product.picture.index', ['id' => $arrPicture->product_id])->with('msg', 'Sửa thành công');
        } else {
            return redirect()->route('admin.product.picture.index', ['id' => $arrPicture->product_id])->with('msg', 'Có lỗi khi sửa');
        }
    }

    public function delPicture($id) {
        $arrPicture = Picture::find($id);
        $picture = $arrPicture->picture;
        if($picture != '') {
            Storage::delete('public/templates/yody/images/'.$picture);
        }
        if($arrPicture->delete()) {
            return redirect()->route('admin.product.picture.index', ['id' => $arrPicture->product_id])->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('admin.product.picture.index', ['id' => $arrPicture->product_id])->with('msg', 'Có lỗi khi xóa');
        }
    }

    public function delAllPicture($id) {
        $arrPictures = Picture::where('product_id', $id)->get();
        foreach($arrPictures as $arrPicture) {
            $picture = $arrPicture->picture;
            if($picture != '') {
                Storage::delete('public/templates/yody/images/'.$picture);
            }
            $arrPicture->delete();
        }
        return redirect()->route('admin.product.picture.index', ['id' => $arrPicture->product_id])->with('msg', 'Xóa thành công');
    }

    public function rating($id) {
        $arrProduct = Product::find($id);
        $arrRatings = Rating::where('product_id', $id)->get();
        return view('admin.product.rating.index', compact('arrRatings', 'arrProduct'));
    }

    public function delRating($id) {
        $arrRating = Rating::find($id);
        if($arrRating->parent_id == 0) {
            $arrRatings = Rating::where('parent_id', $id)->get();
            if($arrRatings != null) {
                foreach($arrRatings as $rating) {
                    $rating->delete();
                }
            }
            $arrRating->delete();
        }

        // dd($arrRating);
        
        if($arrRating->delete()) {
            return redirect()->route('admin.product.rating.index', ['id' => $arrRating->product_id])->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('admin.product.rating.index', ['id' => $arrRating->product_id])->with('msg', 'Xóa thành công');
        }
    }
}
