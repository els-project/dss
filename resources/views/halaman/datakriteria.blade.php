@extends('layouts.app')

@section('content')
<style type="text/css">

    table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>



<div align="center" style="margin-left: 10%; margin-right: 10%">

<div>
    <h2>DATA KRITERIA</h2>
    <br>
</div>
<div>
<a href="{{url('/create')}}" class="btn btn-primary pull-left">Tambah Data</a> 
</div>
<div>


                    <table>

                    <tr>
                    <th>Nama Kriteria</th>
                    <th>Tipe Kriteria</th>
                    <th>Bobot Nilai</th>
                    <th>Aksi</th>
                    
                   
                    </tr>

                    @foreach($kriteria as $dm)
                    
                    <tr>
                    <td>{{ $dm->nama_kriteria }}</td>
                    <td>{{ $dm->type_kriteria }}</td>
                    <td>{{ $dm->bobot_nilai }}</td>
                   

                    

                  
                    </tr>
                    @endforeach
                    </table>
</div>
</div>
{!!$kriteria->render()!!}
                
@endsection
