<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Kriteria;
use App\Subkriteria;

class SAW extends Model
{
    protected $table = 'kriteria';
    protected $field = [ 'id','nama_kriteria', 'sifat', 'bobot','created_at', 'updated_at'];

  

  
}
