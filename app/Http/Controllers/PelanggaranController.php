<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelanggaranController extends Controller
{
    //
    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pelanggarans')->insert([
		'nis' => $request->nis,
		'pelanggaran' => $request->pelanggaran,
		'kategori' => $request->kategori,
        'takzir' => $request->takzir,
        'pengurus' => $request->pengurus
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/indeks');

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
