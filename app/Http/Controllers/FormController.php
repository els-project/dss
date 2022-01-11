<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;
use App\Http\Requests;

class FormController extends Controller
{
    public function index()
    {
        return view('halaman.formpendaftar');
    }

    public function daftar(Request $request)
    {
    	$daftar = new Pendaftar();
        $daftar->nama = $request->get('nama');
        $daftar->email = $request->get('email');
        $daftar->ipk = $request->get('ipk');
        $daftar->prestasi = $request->get('prestasi');
        $daftar->tingkat = $request->get('tingkat');
        $daftar->pengalaman_kerja = $request->get('pengalaman_kerja');
        $daftar->lama_kerja = $request->get('lama_kerja');
        $daftar->pengalaman_organisasi = $request->get('pengalaman_organisasi');
        $daftar->posisi = $request->get('posisi');
        $daftar->save();

        \Session::flash('flash_message','Data Berhasil Disubmit');
        return view('halaman.formpendaftar');


    }
}
