@extends('index')

@section('title', 'Data Alternatif')

@section('title-breadcrumb', 'Data Alternatif')

@section('subtitle-breadcrumb', 'Data Alternatif')

@section('breadcrumb-1', 'Data Alternatif')

@section('plugin-style')
  @include('shared.custom.style.style-datatables')
@endsection

@section('plugin-scripts')
  @include('shared.custom.scripts.scripts-assets-datatables')
@endsection


@section('content')
    <form action="" method="post" id="AddAlternatif">
        <div class="modal-header">
          <h4 class="modal-title">Edit Data Alternatif</h4>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="box-form-tracking">
                  <div class="card-body">
                    <div class="basic-elements">
                        {{ csrf_field() }}
                        <div class="row">
                          
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Nama Pegawai</label>
                              <input class="form-control" type="text" name="nama" value ="<?php echo $data->nama ?>" required="required">
                              <input class="form-control" type="hidden" name="id" value ="<?php echo $data->id ?>" required="required">
                            </div>
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input class="form-control" type="date" name="tgl_lahir" value ="<?php echo $data->tgl_lahir ?>" required="required">
                            </div>
                              <div class="form-group">
                              <label>Pendidikan Terakhir</label>
                                  <select class="form-control" name="pendidikan" value ="<?php echo $data->pendidikan ?>" placeholder="pendidikan">
                                      <option></option>
                                        <option disabled selected> --- Pilih Pendidikan --- </option>
                                          <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>          
                                          </select>
                            </div>
                            <div class="form-group">
                              <label>Umur Pegawai</label>
                              <input class="form-control" type="text" name="umur" value ="<?php echo $data->umur ?>" required="required">
                            </div>
                            <div class="form-group">
                              <label>Berat Badan</label>
                              <input class="form-control" type="text" name="berat_badan" value ="<?php echo $data->berat_badan ?>" required="required">
                            </div>
                            <div class="form-group">
                              <label>Alamat Pegawai</label>
                              <input class="form-control" type="text" name="alamat" value ="<?php echo $data->alamat ?>" required="required">
                            </div>
                            <div class="form-group">
                              <label>Tinggi Badan</label>
                              <input class="form-control" type="text" name="tinggi_badan" value ="<?php echo $data->tinggi_badan ?>" required="required">
                            </div>
                            
                          </div>
                          


                          <!-- <table class="table table-striped">
                <tr>
                    <th class="col-md-3">Kriteria</th>
                    <th colspan="5" class="text-center col-md-9">Nilai</th>
                </tr>
                <?php
                foreach ($dataView as $item) {
                ?>
                <tr>
                    <td><?php echo $item['nama']; ?></td>
                    <?php
                    $no = 1;
                    foreach ($item['data'] as $dataItem) {

                        ?>
                        <td>
                            <input type="radio" name="nilai[<?php echo $dataItem->id_kriteria ?>]"
                                   value="<?php echo $dataItem->value ?>" required="required" 
                                    <?php
                                      if(isset($nilai_alt)){
                                        foreach ($nilai_alt as $item => $value) {
                                            if($value->id_krit == $dataItem->id_kriteria){
                                                if($value->nilai ==  $dataItem->value){
                                                     ?>
                                                     
                                                    checked="checked"
                                                    <?php
                                                }
                                            }
                                        }
                                    }else{
                                        if($no == 3){
                                            ?>
                                            checked="checked"
                                            <?php
                                        }
                                    }
                                    ?>
                            /> <?php 
                            echo $dataItem->sub_kriteria;
                            $no++;
                           ?>
                        </td>


                        <?php
                    }
                    echo '</tr>';
                    }
                    ?>

            </table> -->





                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
          <button class="btn btn-primary waves-effect waves-light btn-action" type="submit" value="Simpan Data" id="save">Save changes</button>
           <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddSepeda"><i class="icofont icofont-ui-add"></i>Tambah Sepeda</button> -->
        </div>
      </form>
@endsection

