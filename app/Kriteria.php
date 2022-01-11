<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Kriteria;
use App\Subkriteria;

class Kriteria extends Model
{
    protected $table = 'kriteria';
    protected $field = [ 'id','kode','nama_kriteria', 'sifat', 'bobot','created_at', 'updated_at'];

  public static function getDataKriteria(){
    return Kriteria::groupBy('id')->get();
  }

  public static function getDataKriteriaSub(){
    return Kriteria::select('*')->groupBy('kriteria.id')
    ->join('sub_kriteria', 'sub_kriteria.id_kriteria', '=', 'kriteria.id')
    ->get();
  }

  public static function getAll()
    {
        $sql = Kriteria::all();
        // if($query->num_rows() > 0){
            foreach ( $query = DB::select($sql) as $row) {
                $kriterias[] = $row;
            }
            return $kriterias;
        // }
    }

  public static function getIDKriteria(){
    return Kriteria::select('id')->get();
  }

  public function nilai() {
        return $this->hasMany(\App\Nilai::class);
    }

  // public function subkriteria() {
  //       return $this->hasMany(\App\Subkriteria::class);
  //   }

    public function crip() {
        return $this->hasMany(\App\Nilai::class);   
    }

  // public function getById()
  //   {
  //       $this->db->where('kdKriteria', $this->kdKriteria);
  //       $query = $this->db->get($this->getTable());

  //       if($query->num_rows() > 0){
  //           foreach ($query->result() as $row) {
  //               $subkriteria[] = $row;
  //           }

  //           return $subkriteria;
  //       }
  //   }

}
