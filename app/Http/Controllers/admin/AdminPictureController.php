<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AdminPictureRequest;

class AdminPictureController extends Controller
{
    public function index() {
        $arrPictures = DB::table('picture_product as pic')->join('product as p', 'pic.product_id', '=', 'p.product_id')->orderBy('picture_id', 'DESC')->select('pic.*', 'p.name as pname')->paginate(5);
        return view('admin.picture.index', compact('arrPictures'));
    }

    public function add() {
        return view('admin.picture.add');
    }

    public function postAdd(AdminPictureRequest $request) {
        $arrProduct = Product::where('name', $request->name)->get();
        foreach ($arrProduct as $value) {
            $product_id = $value->product_id;
        }

        $picture = $request->picture;
        if($picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
        }

        $dataInsert = [
            'product_id'      => $product_id,
            'picture'   => $picture,
        ];

        $result = Picture::insert($dataInsert);
        if($result == true) {
            return redirect()->route('admin.picture.index')->with('msg', 'Thêm thành công');
        }
    }

    public function edit($id) {
        $arrPicture = Picture::find($id);
        $product_id = $arrPicture->product_id;
        $arrProduct = Product::find($product_id);
        return view('admin.picture.edit', compact('arrPicture', 'arrProduct'));
    }

    public function postEdit($id, AdminPictureRequest $request) {
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
        
        $arrProduct = Product::where('name', $request->name)->get();
        foreach ($arrProduct as $value) {
            $product_id = $value->product_id;
        }
        $arrPicture->product_id = $product_id;

        if($arrPicture->update()) {
            return redirect()->route('admin.picture.index')->with('msg', 'Sửa thành công');
        } else {
            return redirect()->route('admin.picture.index')->with('msg', 'Có lỗi khi sửa');
        }
    }

    public function del($id) {
        $arrPicture = Picture::find($id);
        $picture = $arrPicture->picture;
        if($picture != '') {
            Storage::delete('public/templates/yody/images/'.$picture);
        }
        if($arrPicture->delete()) {
            return redirect()->route('admin.picture.index')->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('admin.picture.index')->with('msg', 'Có lỗi khi xóa');
        }
    }
}
