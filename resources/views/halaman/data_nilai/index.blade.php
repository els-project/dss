@extends('index')

@section('title', 'Data Nilai')

@section('title-breadcrumb', 'Data Nilai')

@section('subtitle-breadcrumb', 'Data Nilai')

@section('breadcrumb-1', 'Data Nilai')

@section('plugin-style')
  @include('shared.custom.style.style-datatables')
@endsection

@section('plugin-scripts')
  @include('shared.custom.scripts.scripts-assets-datatables')
@endsection

@section('custom-scripts')
<div>
    <h2>DATA KRITERIA</h2>
    <br>
</div>
<div>

</div>
<div>

<div class="card">  
  <div class="card-block">
    <div class="dt-responsive table-responsive">
        <a href="{{url('/tambah')}}" class="btn btn-primary pull-left">Tambah Data</a> 
      <table id="data-alternatif" class="table table-striped table-bordered nowrap">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Pendidikan</th>
            <th>Actions</th>
          </tr>
        </thead>
       
      
      </table>
    </div>
  </div>
</div>
@endsection