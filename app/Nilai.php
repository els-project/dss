<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use stdClass;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Kriteria;
use App\Subkriteria;
use App\Alternatif;
use App\Nilai;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $field = [ 'id','alternatif_id', 'id_kriteria', 'nilai','created_at', 'updated_at'];


    public function Kriteria()
    {
        return $this->belongsTo(\App\Kriteria::class, 'id_kriteria');
    }
    // public function subkriteria() {
    //     return $this->belongsTo(\App\Subkriteria::class);
    // }
    public function Alternatif()
    {
        return $this->belongsTo(\App\Alternatif::class, 'alternatif_id');
    }

    public static function getNilai($id)
    {
        return DB::table(DB::raw('alternatif a, kriteria k, nilai n, sub_kriteria sk')) 
        ->select(DB::raw('a.id as id_alt, a.nama, k.id as id_krit, n.nilai'))
        ->where('a.id', '=', 'n.alternatif_id')
        ->where('k.id', '=', 'n.id_kriteria')
        ->where('k.id', '=', 'sk.id_kriteria')
        ->where('a.id', '=', $id)
        ->groupBy('n.nilai')->get();

        // $query = $this->db->query(
        //     'select u.kdUniversitas, u.universitas, k.kdKriteria, n.nilai from universitas u, nilai n, kriteria k, subkriteria sk where u.kdUniversitas = n.kdUniversitas AND k.kdKriteria = n.kdKriteria and k.kdKriteria = sk.kdKriteria and u.kdUniversitas = '.$id.' GROUP by n.nilai '
        // );

        // $sql = 
        //     'select u.id, u.nama, k.kode, k.id, n.nilai from alternatif u, nilai n, kriteria k, sub_kriteria sk where u.id = n.alternatif_id AND k.id = n.id_kriteria and k.id = sk.id_kriteria and u.id = '.$id.' GROUP by n.nilai ';
        
        // $query = DB::select($sql);
        // if($query->num_rows() > 0){
            // foreach ($query = DB::select($sql) as $row) {
            //     $nilai[] = $row;
            // }

            // return $nilai;
        // }
    }


  //   public static function getNilai(){
  //   return Nilai::select('*')
  //   // ->groupBy('alternatif.id')
  //   ->join('alternatif', 'nilai.id_alternatif', '=', 'alternatif.id')
  //   // ->join('kriteria', 'kriteria.id', '=', 'nilai.id_kriteria')
  //   ->get();
  // }

  


    // public static function getNilaiAlternatif(){
    //  return Alternatif::select('*')
    //  ->join('nilai', 'nilai.id_alternatif', '=', 'alternatif.id')
    //   ->join('kriteria', 'kriteria.id', '=', 'nilai.id_kriteria')
    //   ->where('alternatif.id', 'nilai.id_alternatif')
    //   ->where('kriteria.id', 'nilai.id_kriteria')
    //   ->get();
    // }


    // public function getTable()
    // {
    //     return 'hasil_saw';
    // }

    // public function createTable($field)
    // {
    //     $fields = array(
    //         'Universitas VARCHAR(120) not null'
    //     );


    //     foreach ($field as $item => $value) {
    //         $fields[] = $value->kriteria.' DECIMAL(13,2) not null ';
    //     }

    //     $this->dbforge->add_field($fields);
    //     $this->dbforge->create_table('hasil_saw');
    // }

    // public static function createTable($field)
    // {
    //     $fields = array(
    //         'Alternatif VARCHAR(120) not null'
    //     );

    //     $fieldse = array(
    //         'Alternatif VARCHAR(120) not null'
    //     );


    //     foreach ($field as $item => $value) {
    //         $fields[] = $value->kriteria.' DECIMAL(13,2) not null ';
    //     }

    //     Schema::connection('mysql')->create('hasil_saw', function($table) 
    //     {
    //         // $table->increments('id');
    //       $table->string($fieldse);
    //         // $table->addColumn($fields);
    //     });

    //     // $this->dbforge->add_field($fields);
    //     // $this->dbforge->create_table('hasil_saw');
    // }

    // public static function getAll()
    // {
    //     $query = Nilai::getTable();
    //     if($query->num_rows() > 0){
    //         foreach ( $query->result() as $row) {
    //             $saw[] = $row;
    //         }
    //         return $saw;
    //     }
    // }

    // public function insert($data)
    // {
    //     $status = $this->insert($this->getTable(), $data);
    //     return $status;
    // }

    

}
