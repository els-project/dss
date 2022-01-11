<!-- Modal Create Data Employee -->
<div class="modal fade Alternatif" id="modal-create-data-alternatif" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="" method="post" id="AddAlternatif">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Alternatif</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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
                              <input class="form-control" type="text" name="nama" required="required">
                            </div>
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input class="form-control" type="date" name="tgl_lahir" required="required">
                            </div>
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
                            <div class="form-group">
                              <label>Umur Pegawai</label>
                              <input class="form-control" type="text" name="umur" required="required">
                            </div>
                            <div class="form-group">
                              <label>Berat Badan</label>
                              <input class="form-control" type="text" name="berat_badan" required="required">
                            </div>
                            <div class="form-group">
                              <label>Alamat Pegawai</label>
                              <input class="form-control" type="text" name="alamat" required="required">
                            </div>
                            <div class="form-group">
                              <label>Tinggi Badan</label>
                              <input class="form-control" type="text" name="tinggi_badan" required="required">
                            </div>
                          </div>



                          <table class="table table-striped">
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
                                        if($no == 3){
                                            ?>
                                            checked="checked"
                                            <?php
                                        }
                                    ?>
                            /> <?php echo $dataItem->sub_kriteria;
                            $no++;
                           ?>
                        </td>

                        <?php
                    }
                    echo '</tr>';
                    }
                    ?>

            </table>





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
    </div>
  </div>
</div>


<!-- Modal Update Data Employee -->

<div class="modal fade Sepeda" id="modal-update-data-alternatif" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form id="UpdateAlternatif" method="POST" action="{{ url('/data-alternatif/update') }}">
        <div class="modal-header">
          <h4 class="modal-title">Update Data Karyawan</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="box-form-tracking">
                  <div class="card-body">
                    <div class="basic-elements">
                      
                        {{ csrf_field() }}
                        <input class="form-control" type="hidden" name="id">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label>Nama Pegawai</label>
                              <input class="form-control" type="text" name="nama" required="required">
                            </div>
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input class="form-control" type="date" name="tgl_lahir" required="required">
                            </div>
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
                            <div class="form-group">
                              <label>Umur Pegawai</label>
                              <input class="form-control" type="text" name="umur" required="required">
                            </div>
                            <div class="form-group">
                              <label>Berat Badan</label>
                              <input class="form-control" type="text" name="berat_badan" required="required">
                            </div>
                            <div class="form-group">
                              <label>Alamat Pegawai</label>
                              <input class="form-control" type="text" name="alamat" required="required">
                            </div>
                            
                            <div class="form-group">
                              <label>Tinggi Badan</label>
                              <input class="form-control" type="text" name="tinggi_badan" required="required">
                            </div>
                          </div>

                          <table class="table table-striped">
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
                                                      if($no == 3){
                                                          ?>
                                                          checked="checked"
                                                          <?php
                                                      }
                                                  ?>
                                          /> <?php echo $dataItem->sub_kriteria;
                                          $no++;
                                         ?>
                                      </td>

                                      <?php
                                  }
                                  echo '</tr>';
                                  }
                                  ?>

                          </table>

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
          <div class="wrapper-load">
            <button class="btn btn-primary waves-effect waves-light btn-action cell preloader5" type="submit" value="Simpan Data" id="">Update
            </button>
           <!--  <div class="preloader3 loader-block">
              <div class="circ1"></div>
              <div class="circ2"></div>
              <div class="circ3"></div>
              <div class="circ4"></div>
            </div> -->
          </div>
        </div>
      </form>
    </div>
  </div>
</div>