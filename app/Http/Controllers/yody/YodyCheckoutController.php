<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class YodyCheckoutController extends Controller
{
    public function checkout() {
        $arrOrder = Order::orderBy('order_id', 'DESC')->limit(1)->get();
        foreach($arrOrder as $item) {
            $order_id = $item->order_id;
        }

        $arrOrder = DB::table('orders as od')->join('customers as cu', 'od.customer_id', '=', 'cu.customer_id')->where('order_id', $order_id)->select('*')->get();
        $arrOrderDetail = DB::table('orders_detail as od')->join('product as p', 'od.product_id', '=', 'p.product_id')->where('order_id', $order_id)->select('*')->get();
        return view('yody.checkout', compact('arrOrder', 'arrOrderDetail', 'order_id'));
    }
}
