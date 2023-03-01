<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_detail;
use App\Http\Requests\YodyPayRequest;

class YodyPayController extends Controller
{
    public function pay() {
        // dd(Session()->get('newCart'));
        $arrProvinces = Province::all();
        $totalAll = 0;
        $totalQuantity = 0;
        if (Session()->has('newCart')) {
            foreach(Session()->get('newCart') as $item) {
                $totalQuantity += $item['quantity'];
                $total = $item['price'] * $item['quantity'];
                $totalAll += $total;
            }
        }
        return view('yody.pay',compact('arrProvinces', 'totalAll', 'totalQuantity'));
    }
    
    public function getDistrict() {
        $province_id = $_GET['province_id'];
        $arrDistricts = District::where('province_id', $province_id)->get();
        return view('yody.district',compact('arrDistricts'));
    }

    public function getWard() {
        $district_id = $_GET['district_id'];
        $arrWards = Ward::where('district_id', $district_id)->get();
        return view('yody.ward', compact('arrWards'));
    }

    public function postOrder(YodyPayRequest $request) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order_date = date('Y/m/d H:i:s');

        $arrWard = Ward::find($request->ward);
        $ward = $arrWard['full_name'];

        $arrDistrict = District::find($request->district);
        $district = $arrDistrict['full_name'];

        $arrProvince = Province::find($request->province);
        $province = $arrProvince['full_name'];

        $address = $request->address.', '.$ward.', '.$district.', '.$province;
        if($request->paymentMethod == 1) {
            $paymentMethod = 'Đã thanh toán bằng Paypal';
        } else if($request->paymentMethod == 2) {
            $paymentMethod = 'Thanh toán khi nhận hàng (COD)';
        }
        $dataCustomer = [
            'fullname'  => $request->fullname,
            'phone'     => $request->phone,
            'address'   => $address,
        ];
        if(Customer::insert($dataCustomer)) {
            $arrCustomer = Customer::orderBy('customer_id', 'DESC')->limit(1)->get();
            foreach($arrCustomer as $item) {
                $customer_id = $item->customer_id;
            }

            $dataOrder = [
                'customer_id' => $customer_id,
                'payment'     => $paymentMethod,
                'note'        => $request->note,
            ];
            if(Order::insert($dataOrder)) {
                $arrOrderDetail = Order::orderBy('order_id', 'DESC')->limit(1)->get();
                foreach($arrOrderDetail as $item) {
                    $order_id = $item->order_id;
                }

                foreach(Session()->get('newCart') as $cart) {
                    $dataOrderDetail = [
                        'order_id'    => $order_id,
                        'product_id'  => $cart['product_id'],
                        'quantity'    => $cart['quantity'],
                        'size'        => $cart['size'],
                    ];

                    $result = Order_detail::insert($dataOrderDetail);
                }
    
                if($result==true) {
                    Session()->forget('newCart');
                    Session()->forget('successPaypal');
                    return redirect()->route('yody.checkout')->with('over', 'hoàn thành');
                }
            }
        }
    }
}