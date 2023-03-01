<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AdminCatRequest;

class AdminCatController extends Controller
{
    public function index() {
        $arrCats = Categories::all();
        return view('admin.cat.index', compact('arrCats'));
    }

    public function add() {
        $arrCats = Categories::all();
        return view('admin.cat.add', compact('arrCats'));
    }

    public function postAdd(AdminCatRequest $request) {
        $picture = $request->picture;
        // dd($picture);
        if($picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
        }

        $picture_menu = $request->picture_menu;
        if($picture_menu != '') {
            $tmp = $request->picture_menu->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture_menu = end($tmp);
        }

        $dataInsert = [
            'name'          => $request->name,
            'sub_name'      => $request->sub_name,
            'picture'       => $picture,
            'picture_menu'  => $picture_menu,
            'parent_id'     => $request->parent_id,
            'active'        => $request->active,
        ];

        $result = Categories::insert($dataInsert);
        if($result == true) {
            return redirect()->route('admin.cat.index')->with('msg', 'Thêm danh mục thành công');
        }
    }

    public function edit($id) {
        $arrCat = Categories::find($id);
        $arrCats = Categories::all();
        return view('admin.cat.edit', compact('arrCat', 'arrCats'));
    }

    public function postEdit($id, AdminCatRequest $request) {
        $arrCat = Categories::find($id);

        $picture = $request->picture;
        if($picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
            $oldPic = $arrCat->picture;
            if($oldPic != '') {
                Storage::delete('public/templates/yody/images/'.$oldPic);
            }
            $arrCat->picture = $picture;
        }

        $picture_menu = $request->picture_menu;
        if($picture_menu != '') {
            $tmp = $request->picture_menu->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture_menu = end($tmp);
            $oldPic = $arrCat->picture_menu;
            if($oldPic != '') {
                Storage::delete('public/templates/yody/images/'.$oldPic);
            }
            $arrCat->picture_menu = $picture_menu;
        }
        $arrCat->name = $request->name;
        $arrCat->sub_name = $request->sub_name;
        $arrCat->parent_id = $request->parent_id;
        $arrCat->active = $request->active;

        if($arrCat->update()) {
            return redirect()->route('admin.cat.index')->with('msg', 'Sửa thành công');
        } else {
            return redirect()->route('admin.cat.index')->with('msg', 'Có lỗi khi sửa');
        }
    }

    // public function del($id) {
    // }
}
