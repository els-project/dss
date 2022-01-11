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
               <!--  <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body">
                    <div>
                    <h5><strong>Bobot (Jumlah seluruh bobot harus = 1)</strong> </h5>
                    </div>
                        
                        <form action="{{ url('hasil') }}" method="post" style="margin: 10px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div>
                        <input class="form-control" type="text" name="bobot_ipk" required="required" placeholder="Bobot IPK"></input>
                        <br>
                        </div>
                        <div>
                        <input class="form-control" type="text" name="bobot_prestasi" required="required" placeholder="Bobot Prestasi"></input>
                        <br>
                        </div>
                        <div>
                        <input class="form-control" type="text" name="bobot_organisasi" required="required" placeholder="Bobot Organisasi"></input>
                        <br>
                        </div>
                        <div>
                        <input class="form-control" type="text" name="bobot_pengalaman_kerja" required="required" placeholder="Bobot Pengalaman"></input>
                        <br>
                        </div>
                        <div>
                        <input type="submit" name='publish' class="btn btn-success" value ="Hitung"/>
                        <br>
                        </div>
                        </form>


                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
