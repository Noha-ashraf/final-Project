<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = product::paginate(10);
        return view('shopiee.shopiee', compact('products'));
    }
    public function livewire()
    {
        return view('livewire');
    }

    // search
    public function saerch()
    {
        $search_text = $_GET['LL'];
        $search_products = product::where('product_name', 'LIKE', '%' . $search_text . '%')->with('category')->get();
        dd($search_text);
    }

    // cart
    public function cart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        if (Auth::check()) {
            $prod_check = product::where('id', $product_id)->exsists();
            if ($prod_check) {
                if (cart::where('product_id' . $product_id)->where('user_id', Auth::id())->exists()) {

                    return response()->json(['status' => $prod_check->name . "Already Added To Cart "]);
                } else {
                    $cartItem = new cart();
                    $cartItem->$product_id;
                    $cartItem->Auth::id();
                    $cartItem->$product_qty;
                    $cartItem->save();
                    return response()->json(['status' => $prod_check->name . "Added To Cart "]);
                }
            }
        } else {
            return response()->json(['status' => "login to continue"]);
        }
    }


    public function shopiee()
    {
        return view('shopiee.shopiee');
    }

    public function user()
    {
        return view('userProfile');
    }
}
