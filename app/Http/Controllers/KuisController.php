<?php

namespace App\Http\Controllers;

// use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function show()
    {
        $no = 1;
        $kuis = DB::table('kuis')->join('users', 'kuis.id_users', '=', 'users.id')
        ->select('kuis.id', 'users.name', 'kuis.judul', 'kuis.kategori')
        ->get();
        return view('admin.tabelKuis.show', compact('kuis', 'no'));
    }

    public function detailKuis($id)
    {
        $no = 1;
        $kuis = DB::table('kuis')->where('id', $id)->first();
        $pertanyaan = DB::table('pertanyaan')->where('id_kuis', $id)->get();
        return view('admin.tabelKuis.detail', compact('kuis', 'pertanyaan', 'no'));
    }

    public function create()
    {
        $user = DB::table('users')->select('id', 'name', 'role')->get();
        $kategoriOpt = DB::select('SHOW COLUMNS FROM kuis WHERE Field = "kategori"');
        foreach ($kategoriOpt as $row) {
            preg_match('/enum\((.*)\)/', $row->Type, $matches);
            $kategori = [];
            foreach (explode(',', $matches[1]) as $value) {
                $v = trim($value, "'");
                $kategori[] = $v;
            }
        }

        $JawabanOpt = DB::select('SHOW COLUMNS FROM pertanyaan WHERE Field = "jawaban"');
        foreach ($JawabanOpt as $row) {
            preg_match('/enum\((.*)\)/', $row->Type, $matches);
            $jawabOpt = [];
            foreach (explode(',', $matches[1]) as $value) {
                $v = trim($value, "'");
                $jawabOpt[] = $v;
            }
        }

        return view('admin.tabelKuis.create', compact('user', 'kategori', 'jawabOpt'));
    }

    public function add(Request $request)
    {
        DB::table('kuis')->insert([
            'id_users' => $request->id_users,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
        ]);

        DB::table('pertanyaan')->insert([
            'id_kuis' => DB::getPdo()->lastInsertId(),
            'soal' => $request->soal,
            'opsi_A' => $request->opsi_A,
            'opsi_B' => $request->opsi_B,
            'opsi_C' => $request->opsi_C,
            'opsi_D' => $request->opsi_D,
            'jawaban' => $request->jawaban,
        ]);

        return redirect('/admin/tabelkuis');
    }

    public function editSoal($id)
    {
        $editSoal = DB::table('pertanyaan')->join('kuis', 'kuis.id', '=', 'pertanyaan.id_kuis')
        ->select('pertanyaan.*', 'kuis.judul', 'kuis.kategori')
        ->where('pertanyaan.id_kuis', $id)
        ->first();

        // dd($editSoal);
        
        $kategoriOpt = DB::select('SHOW COLUMNS FROM kuis WHERE Field = "kategori"');
        foreach ($kategoriOpt as $row) {
            preg_match('/enum\((.*)\)/', $row->Type, $matches);
            $kategori = [];
            foreach (explode(',', $matches[1]) as $value) {
                $v = trim($value, "'");
                $kategori[] = $v;
            }
        }

        $JawabanOpt = DB::select('SHOW COLUMNS FROM pertanyaan WHERE Field = "jawaban"');
        foreach ($JawabanOpt as $row) {
            preg_match('/enum\((.*)\)/', $row->Type, $matches);
            $jawabOpt = [];
            foreach (explode(',', $matches[1]) as $value) {
                $v = trim($value, "'");
                $jawabOpt[] = $v;
            }
        }
        // dd($jawabOpt, $editSoal);
        return view('admin.tabelKuis.editSoal', compact('editSoal', 'jawabOpt', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $upPertanyaan = DB::table('pertanyaan')->where('id', $id)->update([
            'soal' => $request->soal,
            'opsi_A' => $request->opsi_A,
            'opsi_B' => $request->opsi_B,
            'opsi_C' => $request->opsi_C,
            'opsi_D' => $request->opsi_D,
            'jawaban' => $request->jawaban
        ]);

        // dd($request->id_kuis);

        DB::table('kuis')->where('id', $id)->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori
        ]);

        return redirect('/admin/tabelkuis/detail/'.$request->id_kuis);
    }

    public function delete($id)
    {
        DB::table('pertanyaan')->where('id_kuis', $id)->delete();
        DB::table('kuis')->where('id', $id)->delete();
        return redirect('/admin/tabelkuis');
    }

    public function createSoal($id)
    {
        $kuis = DB::table('kuis')->select('id')->where('id', $id)->first();

        $JawabanOpt = DB::select('SHOW COLUMNS FROM pertanyaan WHERE Field = "jawaban"');
        foreach ($JawabanOpt as $row) {
            preg_match('/enum\((.*)\)/', $row->Type, $matches);
            $jawabOpt = [];
            foreach (explode(',', $matches[1]) as $value) {
                $v = trim($value, "'");
                $jawabOpt[] = $v;
            }
        }

        return view('admin.tabelKuis.createSoal', compact('kuis', 'jawabOpt'));
    }

    public function addSoal(Request $request)
    {
        $add = DB::table('pertanyaan')->insert([
            'id_kuis' => $request->id_kuis,
            'soal' => $request->soal,
            'opsi_A' => $request->opsi_A,
            'opsi_B' => $request->opsi_B,
            'opsi_C' => $request->opsi_C,
            'opsi_D' => $request->opsi_D,
            'jawaban' => $request->jawaban,
        ]);
        // dd($request->id_kuis, $add);
        return redirect('/admin/tabelkuis/detail/'.$request->id_kuis);
    }
}
