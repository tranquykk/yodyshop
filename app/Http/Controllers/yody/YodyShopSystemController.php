<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YodyShopSystemController extends Controller
{
    public function shopSystem() {
        return view('yody.shopSystem');
    }
}
