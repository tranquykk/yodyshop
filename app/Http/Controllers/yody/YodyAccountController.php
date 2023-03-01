<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;
use App\Models\Customer;

class YodyAccountController extends Controller
{
    public function account() {
        
        $arrWards = Ward::all();
        if (Auth::check()) {
            $arrUser = User::find(Auth::user()->user_id);
            if($arrUser->customer_id == 0) {
                $arrMember = $arrUser;
                $arrDistricts = '';
                $arrWards = '';
            } else {
                $arrMember = DB::table('users as u')->join('customers as c', 'u.customer_id', '=', 'c.customer_id')->where('u.user_id', Auth::user()->user_id)->select('c.*')->get()->toArray();
                foreach($arrMember as $item) {
                    $pieces = explode(",", $item->address);
                }
                $district = ltrim($pieces[2]);
                $province = ltrim($pieces[3]);

                $arrProvince = Province::where('full_name', $province)->get();
                foreach($arrProvince as $item) {
                    $province_id = $item->province_id;
                }
                $arrDistricts = District::where('province_id', $item->province_id)->get();
                $arrDistrict = District::where('full_name', $district)->get();
                foreach($arrDistrict as $item) {
                    $district_id = $item->district_id;
                }

                $arrWards = Ward::where('district_id', $item->district_id)->get();


                // $district = DB::table('users as u')->join('customers as c', 'u.customer_id', '=', 'c.customer_id')->where('u.user_id', Auth::user()->user_id)->select('c.*')->get()->toArray();
            }
            $arrProvinces = Province::all();
            
            return view('yody.auth.account', compact('arrMember', 'arrProvinces', 'arrDistricts', 'arrWards'));
            
        } else {
            return redirect()->route('yody.auth.login');
        }
    }

    public function editInfo(Request $request) {
        $arrWard = Ward::find($request->ward);
        $ward = $arrWard['full_name'];

        $arrDistrict = District::find($request->district);
        $district = $arrDistrict['full_name'];

        $arrProvince = Province::find($request->province);
        $province = $arrProvince['full_name'];
        
        $address = $request->address.', '.$ward.', '.$district.', '.$province;
        $arrUser = User::find(Auth::user()->user_id);
        if($arrUser->customer_id == 0) {
            $dataCustomer = [
                'fullname'  => $request->fullname,
                'phone'     => $request->phone,
                'address'   => $address,
            ];
            // dd($dataCustomer);
            if(Customer::insert($dataCustomer)) {
                $arrCustomer = Customer::orderBy('customer_id', 'ASC')->get();
                // dd($arrCustomer);
                foreach($arrCustomer as $item) {
                    $customer_id = $item->customer_id;
                }
                $arrUser->customer_id = $customer_id;
                $result = $arrUser->update();
                return redirect()->route('yody.auth.account');
            }
        } else {
            $arrCustomer = Customer::find($request->customer_id);
            $arrCustomer->fullname = $request->fullname;
            $arrCustomer->phone = $request->phone;
            $arrCustomer->address = $address;
            $result = $arrCustomer->update();
            if($result == true) {
                return redirect()->route('yody.auth.account');
            }
        }
        

    }
}
