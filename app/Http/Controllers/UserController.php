<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // $userLog = Auth::user();
        // $avatars = Avatar::where('id', '>', 1)->get();
        // $default = Avatar::first();
        return view('pages.user.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avatars=Avatar::all();
        return view('pages.user.create', compact('avatars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new User;
        $store->name = $request->name;
        $store->firstname = $request->firstname;
        $store->email = $request->email;
        $store->age = $request->age;
        $store->password = $request->password;
        $store->avatar_id = $request->avatar_id;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=User::find($id);
        return view("pages.user.show", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = User::find($id);
        $avatars = Avatar::all();
        return view('pages.user.edit', compact('edit','avatars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            "name"=>"required",
            "firstname"=>"required",
            "age"=>"required",
            "email"=>"required",
            "avatar_id"=>"required",
            "password"=>"required"
        ]);

        $updateEntry = User::find($id);
        $updateEntry->name = $request->name;
        $updateEntry->firstname = $request->firstname;
        $updateEntry->age = $request->age;
        $updateEntry->email = $request->email;
        $updateEntry->password = $request->password;

        $updateEntry->avatar_id = $request->avatar_id;
        $updateEntry->save();
        return redirect("users");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy=User::find($id);
        $destroy->delete();
        return redirect("users");
    }
}