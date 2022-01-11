@extends('index')

@section('title', 'Dashboard')

@section('title-breadcrumb', 'Dashboard')

@section('subtitle-breadcrumb', 'Dashboard')

@section('breadcrumb-1', 'Dashboard')

@section('plugin-style')
  @include('shared.custom.style.style-datatables')
@endsection

@section('plugin-scripts')
  @include('shared.custom.scripts.scripts-assets-datatables')
@endsection

@section('custom-scripts')
<style>
 html, body {
 background-color: #778899;
}
</style>

   <!-- <div style="margin-top: 20px; margin-left: 100px; margin-right: 100px" align="center"> -->

<!-- <div class="row text-center" align="center">

<div><h2></h2>
<hr>
</div>
 
            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="sepeda_lipat.jpg" alt="">
                    <div class="caption">
                        <h3>Keterangan</h3>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="sepeda_balap.jpg" alt="" style="width: 351px; height: 219.367px;">
                    <div class="caption">
                        <h3>Keterangan</h3>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="sepeda_gunung.jpg" alt="" style="width: 351px; height: 219.367px;">
                    <div class="caption">
                        <h3>Keterangan</h3>
                       
                    </div>
                </div>
            </div>
        
        </div> -->

        <!-- </div> -->
@endsection
