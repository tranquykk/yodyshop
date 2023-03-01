<?php

namespace App\Http\Controllers\yody;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Collection;
// use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class YodyCartController extends Controller
{
    public function addCart($id, Request $request) {
        $product = Product::find($id);
        $quantity = $_GET['quantity'];
        $size = $_GET['size'];

        $priceSale = round(($product->price / 100) * (100 - $product->sale_off), -3);
        $priceSave = $priceSale * $quantity;
        $atr = "{$product->product_id}_{$size}";

        $newCart = session()->get('newCart');
        
        $uniqueKey = "{$product->product_id}_{$size}";
        if (isset($newCart[$uniqueKey])) {
            $newCart[$uniqueKey]['quantity'] = $newCart[$uniqueKey]['quantity'] + $quantity;
        } else {
            $newCart[$uniqueKey] = [
                'product_id' => $product->product_id,
                'name' => $product->name,
                'picture' => $product->picture,
                'price' => $priceSale,
                'quantity' => $quantity,
                'size' => $size,
            ];
        }

        session()->put('newCart', $newCart);
        $newCart = session()->get('newCart');

        // $request->session()->flush();
        // dd($newCart);
        // var_dump($cart);
        // $newCart = [];
        // if($product != null) {
        //     $oldCart = Session('cart') ? Session('cart') : null;
        //     $newCart = new Cart($oldCart);
        //     $newCart->addCart($product, $id, $quantity, $size);

        //     $request->session()->put('cart', $newCart);
        // }


        // var_dump($newCart);
        // echo '<pre>';
        // print_r($request->session()->get('cart'));
        return view('yody.cart-item', compact('newCart'));
    }

    public function delCart() {
        $cart_id = $_GET['cart_id'];
        $newCart = session()->get('newCart');
        unset($newCart[$cart_id]);
        session()->put('newCart', $newCart);
        $newCart = session()->get('newCart');
        // session()->forget('newCart');
        // session()->put('newCart', $newCart);
        // $newCart = session()->get('newCart');

        return view('yody.cart-item', compact('newCart'));
    }

    public function resetCart() {
        // $cart_id = $_GET['cart_id'];
        // $newCart = session()->get('newCart');
        // unset($newCart[$cart_id]);
        // session()->put('newCart', $newCart);
        $newCart = session()->get('newCart');
        // session()->forget('newCart');
        // session()->put('newCart', $newCart);
        // $newCart = session()->get('newCart');

        return view('yody.cart-reset', compact('newCart'));
    }

    public function countCart(Request $request) {
        
        $newCart = session()->get('newCart');

        $total = 0;
        foreach($newCart as $item) {
            $total = $total + $item['quantity'];
        }

        return response()->json($total);
    }

    public function cart() {
        return view('yody.cart');
    }

}
