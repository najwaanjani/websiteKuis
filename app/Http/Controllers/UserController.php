<?php

namespace App\Http\Controllers;
	
use Illuminate\Support\Facades\DB;
//use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = DB::table('users')->get();

        return view('user.showData', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function add(Request $request)
    {
        DB::table('users')->insert([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            //'password' => bcrypt($request->password),
            'password' => $request->password,
            'role' => $request->role
        ]);

        return redirect('/show');
    }

    public function edit($id)
    {
        $userId = DB::table('users')->where('id', $id)->get();

        return view('user.edit', compact('userId'));
    }

    public function update(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            //'password' => bcrypt($request->password),
            'password' => $request->password,
            'role' => $request->role
        ]);

        return redirect('/show');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect('/show');
    }
}
