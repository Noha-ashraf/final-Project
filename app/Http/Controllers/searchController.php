<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    //
    function search(Request $request)
    {
        if (isset($_GET['query'])) {
            $search_test = $_GET['query'];
            $search_products = product::where("product_name", 'LIKE', '%' . $search_test . '%')->paginate(2);
            $search_products->appends($request->all());
            return view('search', ['products' => $search_products]);
        } else {

            return view('shopiee.shopiee');
        }
    }
}
