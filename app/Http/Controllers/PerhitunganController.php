<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Kriteria;
use App\Alternatif;


class PerhitunganController extends Controller
{
    public function index()
    {
        $nilai_all = Nilai::count();
        $kriteria_all = Kriteria::count();
        $alternatif_all = Alternatif::count();
        if($nilai_all == 0 || $kriteria_all == 0 || $alternatif_all == 0){
            return view('errors.nodata');
        } else {
            $kriteria = Kriteria::all();
            $alternatif = Alternatif::all();
            $kode_krit = [];
            foreach ($kriteria as $krit)
            {
                $kode_krit[$krit->id] = [];
                foreach($alternatif AS $mhs)
                {
                    foreach($mhs->nilai as $nilais)
                    {
                        if ($nilais->kriteria->id == $krit->id)
                        {
                            $kode_krit[$krit->id][] = $nilais->nilai;
                        }
                        // echo json_encode(max($nilai->nilai_alt));
                    }
                }
                
                if ($krit->sifat == 'Cost')
                {
                    $kode_krit[$krit->id] = min($kode_krit[$krit->id]);
                } 
                elseif ($krit->sifat == 'Benefit')
                {
                    $kode_krit[$krit->id] = max($kode_krit[$krit->id]);
                }
            }
            // echo json_encode($kode_krit);exit;

            // var_dump($kode_krt);
            return view('halaman.perhitungan.index-data-perhitungan',[
                'kriteria'      => $kriteria,
                'alternatif'    => $alternatif,
                'kode_krit'     => $kode_krit
            ]);
        }
    }
}
