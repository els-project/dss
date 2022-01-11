@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close btn-round" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>

    {{ Session::get('flash_message') }}
</div>
</div>
@endif

<div align="center">
    <h2>FORM PENDAFTARAN</h2>
    <br>
</div>

<div align="center">
<form action="{{ url('/store') }}" method="post" enctype="multipart/form-data" style="width: 50%">
<div align="left">
  <div>
    Nama <br>
    <input class="form-control" type="text" name="nama_kriteria" required="required"b>
  </div>
  <div>
    Bobot Nilai <br>
    <input class="form-control" type="text" name="bobot_nilai" required="required">
  </div>
  
  <div style="float:right; margin-bottom:30px;">
    <input type="submit" class="btn btn-success" value="Submit" name="submit">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <button type="button" class="btn btn-default btn-simple">Kembali</button>
  </div>
  </div>
</form>
</div>


@endsection