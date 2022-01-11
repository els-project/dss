<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use File;
use Session;
class RegisController extends Controller
{
       public function index()
    {
        return view('halaman.formpendaftar');
    }

    public function daftar(Request $request)
    {
         if ($foto = $request->file('foto')) {
            $destinationPath = 'foto/';
            $profileImage = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($destinationPath, $profileImage);
            $input['foto'] = "$foto";
        }

    	$daftar = new Alternatif();
        $daftar->nama = $request->get('nama');
        $daftar->tgl_lahir = $request->get('tgl_lahir');
        $daftar->pendidikan = $request->get('pendidikan');
        $daftar->umur = $request->get('umur');
        $daftar->berat_badan = $request->get('berat_badan');
        $daftar->alamat = $request->get('alamat');
        $daftar->tinggi_badan = $request->get('tinggi_badan');
        $daftar->status = $request->get('status');
        $daftar->pengalaman_kerja = $request->get('pengalaman_kerja');
        $daftar->sertifikasi = $request->get('sertifikasi');
        $daftar->foto = $destinationPath.$profileImage;
        // print_r($daftar);die();
        $daftar->save();

        Session::flash('flash_message','Data Berhasil Disubmit');
        return view('halaman.formpendaftar');


    }
}
