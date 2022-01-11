@extends('layouts.app')
@extends('index')
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
<form action="{{ url('/tambah') }}" method="post" enctype="multipart/form-data" style="width: 50%">
<div align="left">
  
  <div>
    Tingkat <br>
      <select class="form-control"  required="required" name="tingkat" title="Tingkat Prestasi">
        <option value="1">Lokal</option>
        <option value="2">Regional</option>
        <option value="3">Nasional</option>
        <option value="4">Internasional</option>
      </select>
  </div>
 
</form>
</div>


@endsection