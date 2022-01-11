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

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <!--    <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body">
                    <div>
                    <h5><strong>Hasil Seleksi (Kriteria x Bobot)</strong> </h5>
                    </div>
                    <table>
                    <tr>
                        <th>Nama</th>
                        <th>IPK</th>
                        <th>Prestasi</th>
                        <th>Pengalaman Kerja</th>
                        <th>Pengalaman Organisasi</th>
                        <th>Jumlah</th>
                    </tr>

                    @for($i=0;$i<=4;$i++)
                    @if(isset($nama[$i]))
                    <tr>
                    
                        <td>{{$nama[$i]}}</td>
                        <td>{{$ipk[$i]}}</td>
                        <td>{{$prestasi[$i]}}</td>
                        <td>{{$pengalaman[$i]}}</td>
                        <td>{{$organisasi[$i]}}</td>
                        <td>{{$jumlah[$i]}}</td>
                    
                    </tr>
                   @endif
                    @endfor
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
