<?php

namespace App\Http\Controllers;
	
use Illuminate\Support\Facades\DB;
//use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $no = 1;
        $showUser = DB::table('users')->get();
        $showAdmin = DB::table('users')->where('role', 'Admin')->get();
        $showUmum = DB::table('users')->where('users.role', 'Umum')
        ->join('umum', 'users.id', '=', 'umum.id_users')
        ->select('users.id', 'users.username', 'umum.total_kuis', 'umum.total_poin')
        ->get();
        // dd($showUmum);
        $showKuis = DB::table('kuis')->join('users', 'kuis.id_users', '=', 'users.id')
        ->select('kuis.*', 'users.username')
        ->get();

        return view('admin.dashboard', compact('no', 'showUser', 'showAdmin', 'showUmum', 'showKuis'));
    }

    public function showUsers()
    {
        $no = 1;
        $user = DB::table('users')->get();
        return view('admin.tabelUser.show', compact('user', 'no'));
    }

    public function createUsers()
    {
        $roleOpt = DB::select('SHOW COLUMNS FROM users WHERE Field = "role"');
        foreach ($roleOpt as $row) {
            preg_match('/enum\((.*)\)/', $row->Type, $matches);
            $roleOpt = [];
            foreach (explode(',', $matches[1]) as $value) {
                $v = trim($value, "'");
                $roleOpt[] = $v;
            }
        }
        // dd($roleOpt);
        return view('admin.tabelUser.create', compact('roleOpt'));
    }

    public function addUsers(Request $request)
    {
        DB::table('users')->insert([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            //'password' => bcrypt($request->password),
            'password' => $request->password,
            'role' => $request->role
        ]);

        return redirect('/admin/tabeluser');
    }

    public function editUsers($id)
    {
        $userId = DB::table('users')->where('id', $id)->get();

        return view('user.edit', compact('userId'));
    }

    public function updateUsers(Request $request, $id)
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

    public function deleteUsers($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect('/show');
    }
}
