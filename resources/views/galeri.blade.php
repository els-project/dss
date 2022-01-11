@extends('layouts.app')

@section('content')
<style>
            html, body {
                background-color: #eeeeee
;
                color:#111111;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

       
        </style>

   <div style="margin-top: 20px; margin-left: 100px; margin-right: 100px" align="center">

<div class="row text-center" align="center">

<div><h1>Galeri PT.Buana Rejeki Lestari</h1>
<hr>
</div>
</div>
  <div class="row">
<div class="col-md-6">
   <div class="col-md-8 col-sm-8 hero-feature">
                <div class="thumbnail">
                    <img src="operator.png" align="left">
                    <div class="caption-responsive">
                        <h3>Operator</h3>
                        
                       
                    </div>
                </div>
            </div>
        </div>
      <div class="col-md-6">
     <div class="col-md-8 col-sm-8 hero-feature">
                <div class="thumbnail">
                    <img src="security.png" align="left">
                    <div class="caption-responsive">
                        <h3>Security</h3>
                       
                       
                    </div>
                </div>
            </div>
      </div>
    </div>
<div class="row">
<div class="col-md-6">  
    <div class="col-md-8 col-sm-8 hero-feature">
                <div class="thumbnail">
                    <img src="pembantu.png"  align="left">
                    <div class="caption-responsive">
                        <h3>Cleaning Service</h3>
                      
                    </div>
                </div>
            </div>
      </div>
      <div class="col-md-6"> 
    <div class="col-md-8 col-sm-8 hero-feature">
                <div class="thumbnail">
                    <img src="supir.png"  align="left">
                    <div class="caption-responsive">
                        <h3>Driver</h3>
                       
                       
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

@include('footer')
@endsection

        