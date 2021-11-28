<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class categoryController extends Controller
{
    //index
    public function index()
    {

        $categorys = category::with('product')->get();
        return view('dashboard.category.categorys', compact('categorys'));
    }


    // find
    public function find($id)
    {


        $category = category::find($id);
        return view('dashboard.category.category', compact('category'));
    }

    // delete
    public function delete($id)
    {

        if (!Gate::allows('moderator') == false) {
            abort(403);
        }

        $category = category::find($id);
        $category->delete();
        return redirect()->route('index.category');
    }

    // create
    public function create()
    {
        // if (Gate::allows('admin') || Gate::allows('moderator') == false) {
        //     abort(403);
        // }

        return view('dashboard.category.create');
    }

    // store
    public function store(Request $request)
    {
        // if (Gate::allows('admin') || Gate::allows('moderator') == false) {
        //     abort(403);
        // }

        $input = $request->all();
        $category = category::create($input);
        if ($request->hasFile('category_image') && $request->file('category_image')->isValid()) {
            $category->addMediaFromRequest('category_image')->toMediaCollection('category_image');
        }
        return redirect()->route('index.category');
    }

    // update
    public function update($id)

    {
        if (!Gate::allows('moderator') == false) {
            abort(403);
        }

        $category = category::find($id);
        return view('dashboard.category.update', compact('category'));
    }

    // edit
    public function edit($id, Request $request)
    {

        if (!Gate::allows('moderator') == false) {
            abort(403);
        }

        $product = category::find($id);
        $product->update([
            'category_name' => $request->category_name,
            // 'product_name' => $request->product_name,

            'category_image' => $request->category_image

        ]);
        return redirect()->route('index.category');
    }
}
