<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkriteria extends Model
{
     protected $table = 'sub_kriteria';
    protected $field = [ 'id', 'sub_kriteria', 'value', 'id_kriteria', 'created_at', 'updated_at'];

    // private function getTable()
    // {
    //     return 'kriteria';
    // }

// public function getLastID(){
//         $this->db->select('id');
//         $this->db->order_by('id', 'DESC');
//         $this->db->limit(1);
//         $query = $this->db->get($table);
//         return $query->row();
//     }

    // private function getData(){
    //     $data = array(
    //         'kdKriteria' => $this->kdKriteria,
    //         'subKriteria' => $this->subKriteria,
    //         'value' => $this->value
    //     );
    //     return $data;
    // }
    
}



