<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class productController extends Controller
{
    //index
    public function index()
    {

        // if (!Gate::allows('moderator') == false) {
        //     abort(403);
        // } else if (!Gate::allows('admin') == false) {
        //     abort(403);
        // }

        $products = product::with('category')->get();
        return view('dashboard.products.products', compact('products'));
    }



    // find
    public function find($id)
    {


        $product = product::find($id);
        return view('dashboard.products.product', compact('product'));
    }

    // delete
    public function delete($id)
    {

        if (!Gate::allows('moderator') == false) {
            abort(403);
        }

        $product = product::find($id);
        $product->delete();
        return redirect()->route('index.products');
    }
    // create
    public function create()
    {

        return view('dashboard.products.create');
    }

    // store
    public function store(Request $request)
    {

        $input = $request->all();
        $products = product::create($input);
        if ($request->hasFile('product_image') && $request->file('product_image')->isValid()) {
            $products->addMediaFromRequest('product_image')->toMediaCollection('product_image');
        }
        return redirect()->route('index.products');
    }
    // update

    public function update($id)
    {

        if (!Gate::allows('moderator') == false) {
            abort(403);
        }
        $product = product::find($id);
        return view('dashboard.products.update', compact('product'));
    }

    // edit
    public function edit($id, Request $request)
    {

        if (!Gate::allows('moderator') == false) {
            abort(403);
        }
        $product = product::find($id);
        $product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'product_image' => $request->product_image
        ]);
        return redirect()->route('index.products');
    }
}
