<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        Auth::logout();
        $username = $request->username;
        $password = $request->password;

        // $dataLogin = [
        //     'username' => $username,
        //     'password' => $password,
        // ];
        
        if($username == 'admin' || $username == 'user' || $username == 'mod') {
            if(Auth::attempt(['username' => $username, 'password' => $password])) {
                return redirect()->route('admin.index.index');
            } else {
                return redirect()->route('auth.login')->with('error', 'Tài khoản hoặc mật khẩu không đúng');
            }
        } else {
            return redirect()->route('auth.login')->with('error', 'Bạn không có quyền truy cập');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
