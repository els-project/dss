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
                    <th>Email</th>
                    <th>IPK</th>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Pengalaman Kerja</th>
                    <th>Lama Kerja</th>
                    <th>Pengalaman Organisasi</th>
                    <th>Posisi</th>
                    </tr>

                    @foreach($pendaftar as $pendafta)
                    
                    <tr>
                    <td>{{ $pendafta->nama }}</td>
                    <td>{{ $pendafta->email }}</td>
                    <td>{{ $pendafta->ipk }}</td>
                    <td>{{ $pendafta->prestasi }}</td>
                    <td>
                    @if($pendafta->tingkat == "1")

                    Lokal

                    @endif

                    @if($pendafta->tingkat == "2")

                    Regional

                    @endif
                
                    @if($pendafta->tingkat == "3")

                    Nasional

                    @endif

                    @if($pendafta->tingkat == "4")

                    Internasional

                    @endif


                    </td>
                    <td>{{ $pendafta->pengalaman_kerja }}</td>
                    <td>{{ $pendafta->lama_kerja }} Tahun</td>
                    <td>{{ $pendafta->pengalaman_organisasi }}</td>
                    <td>
                         @if($pendafta->posisi == "1")

                    Anggota

                    @endif
                
                    @if($pendafta->posisi == "2")

                    Koordinator

                    @endif

                    @if($pendafta->posisi == "3")

                    Pengurus Harian

                    @endif

                    @if($pendafta->posisi == "4")

                    Ketua

                    @endif


                    </td>
                    </tr>
                    @endforeach
                    </table>
</div>
</div>
{!!$pendaftar->render()!!}
                
@endsection
