<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Intro;

class AdminIntroController extends Controller
{
    public function index() {
        $arrIntro = Intro::all();
        return view('admin.intro.index', compact('arrIntro'));
    }

    public function edit($id) {
        $arrIntro = Intro::find($id);
        return view('admin.intro.edit', compact('arrIntro'));
    }

    public function postEdit($id, Request $request) {
        $arrIntro = Intro::find($id);
        $arrIntro->name = $request->name;
        $arrIntro->content = $request->content;

        if($arrIntro->update()) {
            return redirect()->route('admin.intro.index')->with('msg', 'Sửa thành công');
        } else {
            return redirect()->route('admin.intro.index')->with('msg', 'Có lỗi khi sửa');
        }
    }
}
