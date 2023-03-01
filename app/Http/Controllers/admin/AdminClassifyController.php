<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classify;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Categories;
use App\Http\Requests\AdminClassifyRequest;

class AdminClassifyController extends Controller
{
    public function index() {
        // $arrClassifys = DB::table('classify as cl')->join('categories as c', 'cl.cat_id', '=', 'c.cat_id')->orderBy('classify_id', 'DESC')->select('cl.*', 'c.name as cname')->paginate(5);
        $arrClassifys = Classify::join('categories as c', 'classify.cat_id', '=', 'c.cat_id')->orderBy('classify_id', 'DESC')->select('classify.*', 'c.name as cname')->paginate(5);
        return view('admin.classify.index', compact('arrClassifys'));
    }

    public function add() {
        $arrCats = Categories::all();
        return view('admin.classify.add', compact('arrCats'));
    }

    public function postAdd(AdminClassifyRequest $request) {
        $picture = '';
        if($request->picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
        }

        $dataInsert = [
            'name'      => $request->name,
            'sub_name'  => $request->sub_name,
            'picture'   => $picture,
            'cat_id'    => $request->cat_id,
        ];

        $result = Classify::insert($dataInsert);
        if($result == true) {
            return redirect()->route('admin.classify.index')->with('msg', 'Thêm danh mục thành công');
        }
    }

    public function edit($id) {
        $arrCats = Categories::all();
        $arrClassify = Classify::find($id);
        return view('admin.classify.edit', compact('arrClassify', 'arrCats'));
    }

    public function postEdit($id, AdminClassifyRequest $request) {
        $arrClassify = Classify::find($id);

        $picture = $request->picture;
        if($picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
            $oldPic = $arrClassify->picture;
            if($oldPic != '') {
                Storage::delete('public/templates/yody/images/'.$oldPic);
            }
            $arrClassify->picture = $picture;
        }
        $arrClassify->name = $request->name;
        $arrClassify->sub_name = $request->sub_name;
        $arrClassify->cat_id = $request->cat_id;

        if($arrClassify->update()) {
            return redirect()->route('admin.classify.index')->with('msg', 'Sửa thành công');
        } else {
            return redirect()->route('admin.classify.index')->with('msg', 'Có lỗi khi sửa');
        }
    }

    // public function del($id) {
    // }
}
