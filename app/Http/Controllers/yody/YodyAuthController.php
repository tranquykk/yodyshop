<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class YodyAuthController extends Controller
{
    public function register() {
        return view('yody.auth.register');
    }

    public function postRegister(Request $request) {
        
        $this->validate($request, [
            'fullname' => 'required',
            'phone' => 'required|unique:users,phone',
            'email' => 'required|unique:users,username',
            'password' => 'required',
        ], [
            'fullname.required' => 'Vui lòng nhập Họ và tên',
            'phone.required' => 'Vui lòng nhập Số điện thoại',
            'phone.unique' => 'Số điện thoại đã được sử dụng',
            'email.required' => 'Vui lòng nhập Email',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Vui lòng nhập Mật khẩu',
        ]);

        $dataRegister = [
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'username' => $request->email,
            'password' => bcrypt($request->password),
        ];

        $result = User::insert($dataRegister);
        Auth::logout();
        if($result == true) {
            if(Auth::attempt(['username' => $request->email, 'password' => $request->password])) {
                return redirect()->route('yody.index')->with('msgSuccess', 'Đăng nhập thành công');
            }
        }
    }

    public function login() {
        return view('yody.auth.login');
    }

    public function postLogin(Request $request) {
        Auth::logout();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Bạn chưa nhập Gmail',
            'email.email' => 'Gmail sai định dạng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
        ]);

        if(Auth::attempt(['username' => $request->email, 'password' => $request->password])) {
            return redirect()->route('yody.index')->with('msgSuccess', 'Đăng nhập thành công');
        } else {
            return redirect()->route('yody.auth.login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('yody.index');
    }
}
