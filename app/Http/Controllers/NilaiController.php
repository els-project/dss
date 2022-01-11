<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Kriteria;
use App\Alternatif;
use App\Subkriteria;


class NilaiController extends Controller
{
    public function index()
    {
             $Nilai = Alternatif::all();
             $Alternatif = Alternatif::all();
             $Kriteria = Kriteria::all();
             $Nilais = Kriteria::all();
             $DataNilai = Nilai::all();
             $SubKriteria = Subkriteria::all();
            //  foreach ($Alternatif as $alt) {
            //     foreach ($Kriteria as $item) {
            //         // $this->MSubKriteria->kdKriteria = $item->kdKriteria;
            //         $id_kriteria = $item->id;
            //         $id_alternatif = $alt->id;
            //         $dataView[$item->id] = array(
            //             'nama_kriteria' => $item->nama_kriteria,
            //             'nama' => $alt->nama,
            //             'nilai' => Nilai::where('id_kriteria', $id_kriteria)->Where('id_alternatif', $id_alternatif)->get()
            //         );
            //     }
            // }
            // return $dataView;
        // }

        // return view('halaman.data_nilai.index-data-nilai')
        // // ->with('dataView', $this->getDataInsert())
        // ->with('dataView', $dataView)
        // ->with('Value', $Value)
        // ->with('Kriteria', $Kriteria1)
        // ->with('data', $Nilai1);
        
        // $mahasiswa = Mahasiswa::all();
        // $kriteria = Kriteria::all();
        // return view('nilai.index', [
        //     'mahasiswa' => $mahasiswa,
        //     'kriteria' => $kriteria
        // ]);

        return view('halaman.data_nilai.index-data-nilai', [
            // 'Value' => $Value,
            'Kriteria' => $Kriteria,
            // 'SubKriteria' => $SubKriteria,
            'Alternatif' => $Alternatif
        ]);

    }

    private function getDataInsert()
    {
        $dataView = array();
        // $kriteria = $this->MKriteria->getAll();
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();
        foreach ($alternatif as $alt) {
            foreach ($kriteria as $item) {
                // $this->MSubKriteria->kdKriteria = $item->kdKriteria;
                $id_kriteria = $item->id;
                $alternatif_id = $alt->id;
                $dataView[$item->id] = array(
                    'nama_kriteria' => $item->nama_kriteria,
                    'nama' => $alt->nama,
                    'nilai' => Nilai::where('id_kriteria', $id_kriteria)->Where('alternatif_id', $alternatif_id)->get()
                );
            }
        }

        return $dataView;
    }
    
   public function create(Request $request)
    {
         $data = new Nilai();
       
        $data->save();
        return response()->json($data); 
    }
}
