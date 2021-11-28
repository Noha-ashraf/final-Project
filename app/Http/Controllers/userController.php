<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //index
    public function index()
    {
        // if (Gate::allows('admin') || Gate::allows('moderator') == false) {
        //     abort(403);
        // }

        $users = User::all();
        return view('dashboard.user.users', compact('users'));
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    // find
    public function find($id)
    {
        // if (Gate::allows('admin') || Gate::allows('moderator') == false) {
        //     abort(403);
        // }

        $user = User::find($id);
        return view('dashboard.user.user', compact('user'));
    }

    // delete
    public function delete($id)
    {
        if (!Gate::allows('moderator') == false) {
            abort(403);
        }

        $user = User::find($id);
        $user->delete();
        return redirect()->route('index.user');
    }

    // create
    public function create()
    {
        // if (Gate::allows('admin') || Gate::allows('moderator') == false) {
        //     abort(403);
        // }

        return view('dashboard.user.create');
    }

    // store
    public function store(Request $request)
    {
        // if (Gate::allows('admin') || Gate::allows('moderator') == false) {
        //     abort(403);
        // }

        $user = User::create([
            "name" => request('name'),
            "email" => request('email'),
            "email_verified_at" => request('email_verified_at'),
            "password" => request('password'),
            "role" => request('role'),
        ]);
        return redirect()->route('index.user');


        // $input = $request->all();
        // $user = User::create($input);
        // if ($request->hasFile('user_image') && $request->file('user_image')->isValid()) {
        //     $user->addMediaFromRequest('user_image')->toMediaCollection('user_image');
        // }
        return redirect()->route('index.user');
    }


    // update
    public function update($id)
    {
        if (!Gate::allows('moderator') == false) {
            abort(403);
        }

        $user = User::find($id);
        return view('dashboard.user.update', compact('user'));
    }

    // edit
    public function edit($id, Request $request)
    {
        if (!Gate::allows('moderator') == false) {
            abort(403);
        }

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            // 'user_image' => $request->user_image,
            'email' => $request->email,
            'email_verified_at' => $request->email_verified_at,
            'password' => $request->password,
            'role' => $request->role,
        ]);
        return redirect()->route('index.user');
    }
}
