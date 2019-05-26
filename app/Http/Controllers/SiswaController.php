<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Siswa;

use Session;

use App\Exports\SiswaExport;
use App\Exports\PelanggaranExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{

    // method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('input');

}

	public function index()
	{
		$siswa = Siswa::all();
		return view('siswa',['siswa'=>$siswa]);
	}

	public function export_excel()
	{
		return Excel::download(new PelanggaranExport, 'pelanggaran.xlsx');
	}

	public function import_excel(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);

		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/siswa');
	}
}
