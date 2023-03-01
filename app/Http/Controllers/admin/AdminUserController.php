<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AdminUserRequest;
use App\Http\Requests\AdminUserEditRequest;

class AdminUserController extends Controller
{

    public function index() {
        $objUsers = User::where('customer_id', 0)->paginate(20);
        $objMembers = User::where('customer_id', '!=', 0)->paginate(20);
        return view('admin.user.index', compact('objUsers', 'objMembers'));
    }

    public function add() {
        return view('admin.user.add');
    }

    public function postAdd(AdminUserRequest $request) {
        $username = $request->username;
        $fullname = $request->fullname;
        $password = $request->password;

        $dataInsert = [
            'username' => $username,
            'fullname' => $fullname,
            'password' => bcrypt($password),
        ];

        $result = User::insert($dataInsert);
        if($result == true) {
            return redirect()->route('admin.user.index')->with('msg', 'Thêm người dùng thành công');
        }
    }

    public function edit($id) {
        $objUser = User::find($id);
        return view('admin.user.edit', compact('objUser'));
    }

    public function postEdit($id, AdminUserEditRequest $request) {
        $objUser = User::find($id);

        if($request->password) {
            $objUser->fullname = $request->fullname;
            $objUser->password = bcrypt($request->password);
        } else {
            $objUser->fullname = $request->fullname;
        }

        $result = $objUser->update();
        if($result == true) {
            return redirect()->route('admin.user.index')->with('msg', 'Sửa người dùng thành công');
        }
    }

    public function del($id) {
        $objUser = User::find($id);
        $username = $objUser->username;
        // echo $username;
        // die();

        if($username == 'admin') {
            return redirect()->route('admin.user.index')->with('msg', 'Không được xóa admin');
        }

        $result = $objUser->delete();
        if($result) {
            return redirect()->route('admin.user.index')->with('msg', 'Xóa người dùng thành công');
        }
    }
}
