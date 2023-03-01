<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function index() {
        $arrOrders = DB::table('orders as od')->join('customers as cu', 'od.customer_id', '=', 'cu.customer_id')->select('*')->orderBy('order_id', 'DESC')->paginate(10);
        // $arrProducts = DB::table('orders as o')->join('order_detail as od', 'o.order_id', '=', 'od.order_id')->orderBy('order_id', 'DESC')->select('o.*', 'od.name as gname')->paginate(5);
        return view('admin.order.index', compact('arrOrders'));
    }

    public function show($id) {
        $arrOrder = DB::table('orders as od')->join('customers as cu', 'od.customer_id', '=', 'cu.customer_id')->where('order_id', $id)->select('*')->get();
        $arrOrderDetail = DB::table('orders_detail as od')->join('product as p', 'od.product_id', '=', 'p.product_id')->where('order_id', $id)->select('*')->get();
        // dd($arrOrder->order_id);
        return view('admin.order.show', compact('arrOrder', 'arrOrderDetail'));
    }

    

    public function del($id) {
        $arrOrderDetails = Order_detail::where('order_id', $id)->get();
        foreach($arrOrderDetails as $arrOrderDetail) {
            $arrOrderDetail->delete();
        }

        $arrOrder = Order::find($id);
        if($arrOrder->delete()) {
            return redirect()->route('admin.order.index')->with('msg', 'Xóa thành công');
        } else {
            return redirect()->route('admin.order.index')->with('msg', 'Có lỗi khi xóa');
        }
    }
}
