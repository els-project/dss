@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close btn-round" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>

    {{ Session::get('flash_message') }}
</div>

@endif

<div align="center">
    <h2>FORM PENDAFTARAN</h2>
    <br>
</div>

<div align="center">
<form action="{{ url('/daftar') }}" method="post" enctype="multipart/form-data" style="width: 50%">
<div align="left">
  <div class="row">
    <div class="col-md-6">
       <div class="form-group">
    Nama Pegawai <br>
    <input class="form-control" type="text" name="nama" required="required">
  </div>
</div>
   <div class="col-md-6">
       <div class="form-group">
    Tanggal Lahir <br>
    <input class="form-control" type="date" name="tgl_lahir" required="required">
  </div>
</div>
</div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
                              <label>Pendidikan Terakhir</label>
                                  <select class="form-control" name="pendidikan" placeholder="pendidikan">
                                      <option></option>
                                        <option disabled selected> --- Pilih Pendidikan --- </option>
                                          <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>          
                                          </select>
                            </div>
</div>
  <div class="col-md-6">
       <div class="form-group">
    Umur <br>
    <input class="form-control" type="text" name="umur" required="required">
  </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-6">
       <div class="form-group">
    Berat Badan <br>
    <input class="form-control" type="text" name="berat_badan" required="required">
  </div>
</div>
 <div class="col-md-6">
       <div class="form-group">
      Alamat <br>
    <input class="form-control" type="text" name="alamat" required="required">
  </div>
</div>
</div>
  <div class="row">
    <div class="col-md-6">
       <div class="form-group">
    Tinggi Badan <br>
    <input class="form-control" type="text" name="tinggi_badan" required="required">
  </div>
</div>
 <div class="col-md-6">
       <div class="form-group">
      Status <br>
    <input class="form-control" type="text" name="status" required="required">
  </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
       <div class="form-group">
    Pengalam Kerja <br>
    <input class="form-control" type="text" name="pengalaman_kerja" required="required">
  </div>
</div>
 <div class="col-md-6">
       <div class="form-group">
   <label>Pendidikan Terakhir</label>
      <select class="form-control" name="sertifikasi" placeholder="pendidikan">
        <option></option>
          <option disabled selected> --- Pilih Sertifikasi --- </option>
            <option value="Gada Pratama">Gada Pratama</option>
            <option value="Gada Madya">Gada Madya</option>
            <option value="Gada Utama">Gada Utama</option>        
      </select>
  </div>
</div>
</div>
<div class="row">
    <div class="col-md-6">
       <div class="form-group">
    Upload Foto <br>
    <input class="form-control" type="file" name="foto" required="required">
  </div>
</div>
  <div style="float:right; margin-bottom:30px;">
    <input type="submit" class="btn btn-success" value="Submit" name="submit">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <button type="button" class="btn btn-default btn-simple">Kembali</button>
  </div>
</div>
</form>
</div>

 @include('footer') 
@endsection