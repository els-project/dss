<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Alternatif;
use App\Kriteria;
use App\Subkriteria;
use App\Nilai;
use Illuminate\Support\Facades\Schema;
class AlternatifController extends Controller
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
             $Subkriteria = DB::table('nilai')->groupBy('id_kriteria')->get();
             // $DataNilai = ::where('id', $id)->get()
             // $IDKriteria = Kriteria::getIDKriteria();
             // foreach ($Kriteria as $item) {
             //     $IDK = $item->id;
             //     array(
             //        $IDK = $item->id,
             //        $getsub = Subkriteria::where('id_kriteria', $IDK)->get()
             //     );

                //  $dataView[$item->kdKriteria] = array(
                // 'nama' => $item->kriteria,
                // // 'data' => $this->MSubKriteria->getById()
                // $getsub = Subkriteria::where('id_kriteria', $IDK)->get();
                //     );

             // }


             // $getsub = Subkriteria::where('id_kriteria', 'publish')->groupBy('LokerStatus')->get();
             // $getsub = Subkriteria::where('id_kriteria', $IDK)->get();

        return view('halaman.data_alternatif.index-data-alternatif')
        ->with('dataView', $this->getDataInsert())
        ->with('kriteria_sub', $dataKriteria)
        // ->with('getsub', $getsub)
        ->with('sub_kri', $Sub_kriteria)
        ->with('kriteria', $Kriteria)
        ->with('data', $Alternatif);

        // return view('halaman.data_alternatif.index-data-alternatif', [
        //     'dataView' => $this->getDataInsert(),
        //     'kriteria' => $Kriteria,
        //     'Kriteria' => $Kriteria,
        //     'SubKriteria' => $Subkriteria,
        //     'Alternatif' => $Alternatif,
        //     // 'DataNilai' => $DataNilai,
        //     'data' => $Alternatif
        // ]);
    }

    private function getDataInsert()
    {
        $dataView = array();
        // $kriteria = $this->MKriteria->getAll();
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();
        foreach ($kriteria as $item) {
            foreach ($alternatif as $alt) {
                // $this->MSubKriteria->kdKriteria = $item->kdKriteria;
                $id_kriteria = $item->id;
                $alternatif_id = $alt->id;
                $dataView[$item->id] = array(
                    'nama' => $item->nama_kriteria,
                    // 'data' => $this->MSubKriteria->getById()
                    'data' => Subkriteria::where('id_kriteria', $id_kriteria)->get(),
                    'data_alternatif' => Alternatif::all(),
                    'data_kriteria' => Kriteria::all(),
                    'data_nilai' => Nilai::where('id_kriteria', $id_kriteria)->where('alternatif_id', $alternatif_id)->get()
                );
            }
        }

        return $dataView;
    }

     public function nilai()
    {
             $Alternatif = Alternatif::all();
        return view('halaman.data_nilai.index-data-nilai')->with('data', $Alternatif);
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
       $data = Alternatif::findOrFail($id);
       // $record_num = end($this->uri->segments);
       // $id = {{ Request::segment(2) }};
       // echo $id;
       
       // return view('halaman.data_alternatif.edit-data-alternatif', [
       //        'data' => $data,
       // ]);
       $nilai_alt = Nilai::getNilai($id);
       // $nilai_alta = Nilai::where('id_kriteria', $id)->get();
       //   foreach ( $nilai_alta as $row) {
       //          $nilai_alts = $row->nilai;
       //          echo $nilai_alts;
       //      }
        // echo "nilai_alts";
       return view('halaman.data_alternatif.edit-data-alternatif')
            ->with('dataView', $this->getDataInsert())
            // ->with('kriteria_sub', $dataKriteria)
            // ->with('getsub', $getsub)
            // ->with('sub_kri', $Sub_kriteria)
            ->with('nilai_alt', $nilai_alt)
            ->with('data', $data);
    }

    public function edits(Request $request)
    {
        // $Alternatif = Alternatif::all();
        // $id = $this->input->post('id');
        $Alternatif = Alternatif::find ( $request->id );
             $Kriteria = Kriteria::all();
             $Sub_kriteria = Subkriteria::all();
             $dataKriteria = Kriteria::getDataKriteriaSub();
             $Subkriteria = DB::table('nilai')->groupBy('id_kriteria')->get();
             // $DataNilai = ::where('id', $id)->get()
             // $IDKriteria = Kriteria::getIDKriteria();
             // foreach ($Kriteria as $item) {
             //     $IDK = $item->id;
             //     array(
             //        $IDK = $item->id,
             //        $getsub = Subkriteria::where('id_kriteria', $IDK)->get()
             //     );

                //  $dataView[$item->kdKriteria] = array(
                // 'nama' => $item->kriteria,
                // // 'data' => $this->MSubKriteria->getById()
                // $getsub = Subkriteria::where('id_kriteria', $IDK)->get();
                //     );

             // }


             // $getsub = Subkriteria::where('id_kriteria', 'publish')->groupBy('LokerStatus')->get();
             // $getsub = Subkriteria::where('id_kriteria', $IDK)->get();

        return view('halaman.data_alternatif.edit-data-alternatif')
        ->with('dataView', $this->getDataInsert())
        ->with('kriteria_sub', $dataKriteria)
        // ->with('getsub', $getsub)
        ->with('sub_kri', $Sub_kriteria)
        ->with('kriteria', $Kriteria)
        ->with('data', $Alternatif);
    }

    // public function edit($id)
    // {
    //     //
    //     // $mahasiswa = Mahasiswa::find($id); 
    //     // $nilai = DB::table('nilai')
    //     //     ->join('kriteria', 'kriteria.id', '=', 'nilai.kriteria_id')
    //     //     ->select('kriteria.id AS id_kriteria', 'nilai.id AS id_nilai', 'kriteria.nama', 'kriteria.kode', 'nilai.nilai_alt')
    //     //     ->where('nilai.mahasiswa_id', $id)
    //     //     ->get();
    //     $mahasiswa = Mahasiswa::find($id);
    //     // echo '<br>$mahasiswa: ' . json_encode($mahasiswa);
    //     // echo '<br>$mahasiswa->nilai: ' . json_encode($mahasiswa->nilai);exit;
    //     // $nilai = Kriteria::all()->nilai();
    //     $kriteria = Kriteria::all();
    //     // foreach ($mahasiswa )
    //     return view('nilai.edit', [
    //         'kriteria' => $kriteria,
    //         'mahasiswa' => $mahasiswa,
    //         // 'nilai' => $nilai
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function createss(Request $request)
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
        $nilais = $request->nilai;  
        // foreach ($nilai as $item) {
        foreach ($nilais as $item => $value) {
            $nil = new Nilai();
            $nil->alternatif_id = $data->id;
            $nil->id_kriteria = $item;
            $nil->nilai = $value;
            // $nil->value = $item['nilai'];

            $nil->save();
        } 


        return response()->json($data); 
    }

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
        // $data->save();

        $nilais = $request->nilai;  
        // foreach ($nilai as $item) {
        foreach ($nilais as $item => $value) {
            $nil = new Nilai();
            $nil->alternatif_id = $request->id;
            $nil->id_kriteria = $item;
            $nil->nilai = $value;
            // $nil->value = $item['nilai'];

            $nil->save();
        }
        // print_r($nilais);

        // return response()->json($data);
        return redirect('/data-alternatif');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function deleted(Request $request){
    Schema::disableForeignKeyConstraints();
        Alternatif::find($request->id)->delete();
        return response()->json();
        Schema::enableForeignKeyConstraints();
}
}
