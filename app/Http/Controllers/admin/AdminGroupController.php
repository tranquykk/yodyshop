<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Classify;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AdminGroupRequest;

class AdminGroupController extends Controller
{
    public function index() {
        $arrGroups = DB::table('classify as c')->join('classify_group as g', 'c.classify_id', '=', 'g.classify_id')->orderBy('classify_group_id', 'DESC')->select('g.*', 'c.name as cname')->paginate(5);
        return view('admin.group.index', compact('arrGroups'));
    }

    public function add() {
        $arrClassifys = Classify::all();
        return view('admin.group.add', compact('arrClassifys'));
    }

    public function postAdd(AdminGroupRequest $request) {
        $picture = '';
        if($request->picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
        }

        $dataInsert = [
            'name'       => $request->name,
            'sub_name'   => $request->sub_name,
            'picture'    => $picture,
            'classify_id'=> $request->classify_id,
            'active'     => $request->active,
        ];

        $result = Group::insert($dataInsert);
        if($result == true) {
            return redirect()->route('admin.group.index')->with('msg', 'Thêm danh mục thành công');
        }
    }

    public function edit($id) {
        $arrClassifys = Classify::all();
        $arrGroup = Group::find($id);
        return view('admin.group.edit', compact('arrClassifys', 'arrGroup'));
    }

    public function postEdit($id, AdminGroupRequest $request) {
        $arrGroup = Group::find($id);

        $picture = $request->picture;
        if($picture != '') {
            $tmp = $request->picture->store('public/templates/yody/images/');
            $tmp = explode('/', $tmp);
            $picture = end($tmp);
            $oldPic = $arrGroup->picture;
            if($oldPic != '') {
                Storage::delete('public/templates/yody/images/'.$oldPic);
            }
            $arrGroup->picture = $picture;
        }
        $arrGroup->name = $request->name;
        $arrGroup->sub_name = $request->sub_name;
        $arrGroup->classify_id = $request->classify_id;
        $arrGroup->active = $request->active;

        if($arrGroup->update()) {
            return redirect()->route('admin.group.index')->with('msg', 'Sửa thành công');
        } else {
            return redirect()->route('admin.group.index')->with('msg', 'Có lỗi khi sửa');
        }
    }

    public function del($id) {
        $arrGroup = Group::find($id);
        $picture = $arrGroup->picture;
        if($picture != '') {
            Storage::delete('public/templates/yody/images/'.$picture);
        }
        if($arrGroup->delete()) {
            return redirect()->route('admin.group.index')->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('admin.group.index')->with('msg', 'Có lỗi khi xóa');
        }
    }
}
