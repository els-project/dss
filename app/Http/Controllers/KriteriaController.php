<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kriteria;
use App\Subkriteria;


class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $krit = Kriteria::select('*')
                ->join('sub_kriteria', 'sub_kriteria.id_kriteria', '=', 'kriteria.id')
                ->get();

         $Kriteria = Kriteria::all();
         foreach ( $Kriteria as $row) {
                $kriterias[] = $row;
            }
            // echo $kriterias
            // return $kriterias;
        // $Kriteria = Kriteria::getAll();
         // $Subkriteria = Subkriteria::all();
         // $Subkriteria = DB::table('sub_kriteria')->orderBy('id', 'Desc')->first();
         $Subkriteria = DB::table('sub_kriteria')->groupBy('id_kriteria')->get();
        
      return view('halaman.data_kriteria.index-data-kriteria')
        ->with('data', $Kriteria)
        ->with('krit', $krit)
        ->with('sub', $Subkriteria);
    }

    public function getSubById($id)
    {   
        $data = Subkriteria::where('id_kriteria', $id)->get();
        // $this->MSubKriteria->kdKriteria = $id;
        // $data = $this->MSubKriteria->getById();
        echo json_encode(array('param' => $data, 'id' => $id));
        // return response()->json($data); 
    }

    public function updateSubKriteria(Request $request)
    {
                $id_kriteria = $request->kdKriteria;
                $sub_kriteria = array();
                $status = false;

                $sub_kriteria = array(
                        array('sub_kriteria' => $request->itemKriteria1, 'id' => $request->kdSubKriteria1,
                            'value' => 1),
                        array('sub_kriteria' => $request->itemKriteria2, 'id' => $request->kdSubKriteria2,
                            'value' => 2),
                        array('sub_kriteria' => $request->itemKriteria3, 'id' => $request->kdSubKriteria3,
                            'value' => 3),
                        array('sub_kriteria' => $request->itemKriteria4, 'id' => $request->kdSubKriteria4,
                            'value' => 4),
                        array('sub_kriteria' => $request->itemKriteria5, 'id' => $request->kdSubKriteria5,
                            'value' => 5),
                    );
                    foreach ($sub_kriteria as $item) {
                        // $sub = new Subkriteria();
                        // $sub->id_kriteria = $id_kriteria;
                        // $sub->sub_kriteria = $item['sub_kriteria'];
                        // $sub->value = $item['value'];

                        // $sub->update();
                        $update = Subkriteria::where('id',$item['id'])->update(array(
                         'sub_kriteria'=>$item['sub_kriteria'], 'value'=>$item['value'], 'id_kriteria'=>$id_kriteria,));
                    }
                    // print_r($update);
                    return redirect('/data-kriteria');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        $data = new Kriteria();
        $data->kode = $request->kode;
        $data->nama_kriteria = $request->nama_kriteria;    
        // $data->nama_karyawan = strtoupper($request->NamaKaryawan);    
        $data->sifat = $request->sifat;
        $data->bobot = $request->bobot;
    
        $data->save();

        $sub_kriteria = array(
                        array('sub_kriteria' => $request->kriteria1,
                            'value' => 1),
                        array('sub_kriteria' => $request->kriteria2,
                            'value' => 2),
                        array('sub_kriteria' => $request->kriteria3,
                            'value' => 3),
                        array('sub_kriteria' => $request->kriteria4,
                            'value' => 4),
                        array('sub_kriteria' => $request->kriteria5,
                            'value' => 5),
                    );
        foreach ($sub_kriteria as $item) {
            $sub = new Subkriteria();
            $sub->id_kriteria = $data->id;
            $sub->sub_kriteria = $item['sub_kriteria'];
            $sub->value = $item['value'];

            $sub->save();
        }  
        return response()->json($data); 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
       $data = Kriteria::find ( $request->id );
        
        $data->kode = $request->kode;   
        $data->nama_kriteria = $request->nama_kriteria;
        $data->sifat = $request->sifat;
        $data->bobot = $request->bobot;
        // $data->kriteria1 = $request->kriteria1;
        // $data->kriteria2 = $request->kriteria2;
        // $data->kriteria3 = $request->kriteria3;
        // $data->kriteria4 = $request->kriteria4;
        // $data->kriteria5 = $request->kriteria5;
        $data->save();
        return response()->json($data);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function deleted(Request $request){
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // my table definitions go here
        
        Kriteria::find($request->id)->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // Subkriteria::find($request->id)->delete();
        // return response()->json();
        return redirect('/data-kriteria');
    }
}
