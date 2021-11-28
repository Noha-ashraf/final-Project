<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    //
    // public function detail($id)
    // {
    //     $product = product::find($id);
    //     return view('details', compact('products'));
    // }



    public function add(product $product)
    {
        if (cart::where('user_id', auth()->id())->where('product_id', $product->id)->exists()) {
            cart::where('product_id', $product->id)->delete();
            session()->flash('success', 'item removed');
            return redirect()->back();
        }
        $cart = new cart();
        $cart->product_id = $product->id;
        $cart->product_quantaty = 1;
        $cart->user_id = auth()->id();
        // $cart->images = $product->addMedia($product->file('image'))->toMediaCollection('images');

        $cart->save();
        session()->flash('success', 'item added successfully');

        return redirect()->back();
    }



    public function carts()
    {
        $carts = cart::where('user_id', auth()->id())->get();

        return view('cart', compact('carts'));
    }
}
