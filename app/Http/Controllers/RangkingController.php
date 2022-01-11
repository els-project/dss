<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alternatif;
use App\Kriteria;
use App\Subkriteria;
use App\Nilai;


class RangkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $Alternatif = Alternatif::all();
             $Kriteria = Kriteria::all();
             $Sub_kriteria = Subkriteria::all();
             $dataKriteria = Kriteria::getDataKriteriaSub();
             $Subkriteria = DB::table('sub_kriteria')->groupBy('id_kriteria')->get();

             // $ranking = Nilai::createTable();
             $table1 = $this->initialTableSAW($Alternatif);
             // $this->page->setData('table1', $table1);

        // if($Alternatif == null){
        //     redirect('rangking/noData');
        // }

        return view('halaman.data_rangking.index-data-rangking')
        // ->with('dataView', $this->getDataInsert())
        ->with('kriteria_sub', $dataKriteria)
        // ->with('krit', $ranking)
        ->with('table1', $table1)
        ->with('sub_kri', $Sub_kriteria)
        ->with('kriteria', $Kriteria)
        ->with('data', $Alternatif);
    }

    private function initialTableSAW($Alternatif)
    {
        $nilai = Nilai::getNilaiAlternatif();

        $dataInput = array();
        $no = 0;
        foreach ($Alternatif as $item => $itemAlternatif) {
            foreach ($nilai as $index => $itemNilai) {
                if ($itemAlternatif->alternatif_id == $itemNilai->alternatif_id) {
                    $dataInput[$no]['nama'] = $itemAlternatif->nama;
                    $dataInput[$no][$itemNilai->kriteria] = $itemNilai->nilai;
                }
            }
            $no++;
        }

        foreach ($dataInput as $data => $item){
            // $this->MSAW->insert($item);
            Nilai::insert($item);
        }
        // return $this->MSAW->getAll();
        // return Nilai::all();
    }

   
    public function noData()
    {
        // loadPage('saw/noData');
    }

    // private function getDataInsert()
    // {
    //     $dataView = array();
    //     $kriteria = $this->MKriteria->getAll();
    //     foreach ($kriteria as $item) {
    //         $this->MSubKriteria->kdKriteria = $item->kdKriteria;
    //         $dataView[$item->kdKriteria] = array(
    //             'nama' => $item->kriteria,
    //             'data' => $this->MSubKriteria->getById()
    //         );
    //     }

    //     return $dataView;
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $data = new Alternatif();
        $data->nama = $request->nama;    
        // $data->nama_karyawan = strtoupper($request->NamaKaryawan);    
        $data->tgl_lahir = $request->tgl_lahir;
        $data->pendidikan = $request->pendidikan;
        $data->umur = $request->umur;
        $data->berat_badan = $request->berat_badan;
        $data->alamat = $request->alamat;
        $data->tinggi_badan = $request->tinggi_badan;  
        $data->save();


        // $nilai = array(
        //                 array('sub_kriteria' => $request->kriteria1,
        //                     'value' => 1),
        //                 array('sub_kriteria' => $request->kriteria2,
        //                     'value' => 2),
        //                 array('sub_kriteria' => $request->kriteria3,
        //                     'value' => 3),
        //                 array('sub_kriteria' => $request->kriteria4,
        //                     'value' => 4),
        //                 array('sub_kriteria' => $request->kriteria5,
        //                     'value' => 5),
        //             );
        $nilai = $request->nilai;  
        // foreach ($nilai as $item) {
        foreach ($nilai as $item => $value) {
            $nil = new Nilai();
            $nil->alternatif_id = $data->id;
            $nil->id_kriteria = $item;
            $nil->nilai = $value;
            // $nil->value = $item['nilai'];

            $nil->save();
        } 


        return response()->json($data); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $data = Alternatif::find ( $request->id );
           
        $data->nama = $request->nama;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->pendidikan = $request->pendidikan;
        $data->umur = $request->umur;
        $data->berat_badan = $request->berat_badan;      
        $data->alamat = $request->alamat;
        $data->tinggi_badan = $request->tinggi_badan;    
        $data->save();
        return response()->json($data);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
