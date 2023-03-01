<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index() {
        $arrContacts = Contact::orderBy('contact_id', 'DESC')->paginate(5);
        return view('admin.contact.index', compact('arrContacts'));
    }

    public function del($id) {
        $arrContact = Contact::find($id);
        if($arrContact->delete()) {
            return redirect()->route('admin.contact.index')->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('admin.contact.index')->with('msg', 'Có lỗi khi xóa');
        }
    }
}