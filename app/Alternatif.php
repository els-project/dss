<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
      protected $table = 'alternatif';
    protected $field = [ 'id','nama', 'tgl_lahir', 'pendidikan','umur','berat_badan','alamat','tinggi_badan','created_at', 'updated_at'];

    public function nilai()
    {
        return $this->hasMany(\App\Nilai::class);
        // return $this->hasMany(\App\Nilai::class,'nilai','id_alternatif','id_kriteria', 'nilai');
    }

    public function crip()
    {
        return $this->belongsToMany(\App\Nilai::class, 'nilai', 'alternatif_id', 'id_kriteria');
    }
}
