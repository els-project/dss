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
    <h2>DATA PENDAFTAR</h2>
    <br>
</div>

<div>
                    <table>

                    <tr>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan</th>
                    <th>Umur</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>alamat</th>
                   
                    </tr>

                    @foreach($pegawai as $pega)
                    
                    <tr>
                    <td>{{ $pega->nama_pegawai }}</td>
                    <td>{{ $pega->tgl_lahir }}</td>
                    <td>{{ $pega->pendidikan }}</td>
                    <td>{{ $pega->berat_badan }}</td>
                    <td>{{ $pega->tinggi_badan }}</td>
                    <td>{{ $pega->alamat }}</td>

                    

                  
                    </tr>
                    @endforeach
                    </table>
</div>
</div>
{!!$pegawai->render()!!}
                
@endsection
