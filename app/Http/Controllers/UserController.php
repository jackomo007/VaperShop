<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $users = User::all();
        return view("users.index",["users" => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view("users.edit", ["user" => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->address = $request->address;
        $user->telephone = $request->telephone;

        if($user->save()){
            return redirect("/");
        } else {
            return view("users.edit", ["user" => $user]);
        }
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect('/users');
    }
}
