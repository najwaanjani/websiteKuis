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
        $totalUser = DB::table('users')->count();
        $totalAdmin = DB::table('users')->where('role', 'Admin')->count();
        $totalUmum = DB::table('users')->where('role', 'Umum')->count();
        $totalKuis = DB::table('kuis')->count();
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

        return view('admin.dashboard', compact('no', 'showUser', 'showAdmin', 'showUmum', 'showKuis', 'totalAdmin', 'totalUmum', 'totalKuis', 'totalUser'));
    }

    public function showUsers()
    {
        $no = 1;
        $user = DB::table('users')->join('umum', 'users.id', '=', 'umum.id_users')
        ->select('users.*', 'umum.*')
        ->get();
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

        return view('admin.tabelUser.create', compact('roleOpt'));
    }

    public function addUsers(Request $request)
    {
        DB::table('users')->insert([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        DB::table('umum')->insert([
            'id_users' => DB::getPdo()->lastInsertId(),
            'total_kuis' => 0,
            'total_jawab' => 0,
            'total_poin' => 0
        ]);

        return redirect('/admin/tabeluser');
    }

    public function editUsers($id)
    {
        $userId = DB::table('users')->where('id', $id)->get();
        $roleOpt = DB::select('SHOW COLUMNS FROM users WHERE Field = "role"');
        foreach ($roleOpt as $row) {
            preg_match('/enum\((.*)\)/', $row->Type, $matches);
            $roleOpt = [];
            foreach (explode(',', $matches[1]) as $value) {
                $v = trim($value, "'");
                $roleOpt[] = $v;
            }
        }

        return view('admin.tabelUser.edit', compact('userId', 'roleOpt'));
    }

    public function updateUsers(Request $request, $id)
    {
        DB::table('users')->where('id', $id)->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect('/admin/tabeluser');
    }

    public function deleteUsers($id)
    {
        DB::table('users')->where('id', $id)->delete();

        return redirect('/admin/tabeluser');
    }
}
