<?php

namespace App\Models;
// use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cart {
    // use HasFactory;
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __constant($cart) {
        if($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function addCart($product, $id, $quantity, $size) {
        $price = round(($product->price / 100) * (100 - $product->sale_off), -4);
        $newProduct = [
            'productInfo'  => $product,
            'price'        => $price,
            'quantity'     => $quantity,
            'size'         => $size,
        ];

        if($this->products) {
            if(array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }

        $newProduct['quantity'] += $quantity;
        $newProduct['price'] +=  $price * $newProduct['quantity'];
        // $newProduct['size'] = $size;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $newProduct['price'];
        $this->totalQuantity += $newProduct['quantity'];
    }
}

?>