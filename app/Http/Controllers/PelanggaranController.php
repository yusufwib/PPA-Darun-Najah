<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PelanggaranController extends Controller
{
    //
    // method untuk insert data ke table pegawai
public function store(Request $request)
{
    // $id = DB::table('siswas')->where('nis', $nis)->get();
    // insert data ke table pegawai
    $res1 = URL::previous();
    $res2 = substr($res1, 22, 100);
	DB::table('pelanggarans')->insert([
		'nis' => $res2,
		'pelanggaran' => $request->pelanggaran,
		'kategori' => $request->kategori,
        'takzir' => $request->takzir,
        'pengurus' => $request->pengurus
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/indeks');

}

public function get($nis){
    $clothes = DB::table('siswas')->where('nis',$nis)->get();
    // memanggil view edit
    return view('/search');
}

public function getDel($id){
    $clothes = DB::table('pelanggarans')->where('id',$id)->delete();
    // memanggil view edit
    return redirect('/daftar');
}

public function guru(Request $request)
{
	// insert data ke table pegawai
	DB::table('gurus')->insert([
		'username' => $request->username,
		'password' => $request->password,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/register');

}
}
