<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class shopieeController extends Controller
{
    public $per_page = 8;

    //

    public function products(Request $request)
    {
        $products = product::paginate(8);
        $categorys = category::get();
        $categorysAll = category::all();
        $productsAll = product::all();
        $trendItems = product::inRandomOrder()->limit(8)->get();
        // $trendItems = product::paginate(8);
        $products = product::query()->paginate($this->per_page);

        // filter category
        $MenProducts = category::where('category_name', 'men')->first()->product;
        $women = category::where('category_name', 'women')->first()->product;
        $Kids = category::where('category_name', 'kids')->first()->product;

        // search form



        return view('shopiee.shopiee')
            ->with(compact('categorys'))
            ->with(compact("products"))
            ->with(compact('categorysAll'))
            ->with(compact('MenProducts'))
            ->with(compact('women'))
            ->with(compact('productsAll'))
            ->with(compact('trendItems'))
            ->with(compact('Kids'));
    }
}
