<!-- Modal Create Data Employee -->
<div class="modal fade Sepeda" id="modal-create-data-kriteria" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="" method="post" id="AddKriteria">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Kriteria</h4>
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
                              <label>Kode</label>
                              <input class="form-control" type="text" name="kode" required="required">
                            </div>
                            <div class="form-group">
                              <label>Nama Kriteria</label>
                              <input class="form-control" type="text" name="nama_kriteria" required="required">
                            </div>
                              <div class="form-group">
                              <label>Sifat Kriteria</label>
                                  <select class="form-control" name="sifat" placeholder="sifat">
                                      <option></option>
                                        <option disabled selected> --- Sifat Kriteria --- </option>
                                          <option value="Benefit">Benefit</option>
                                            <option value="Cost">Cost</option>             
                                          </select>
                            </div>
                            <div class="form-group">
                              <label>Bobot Kriteria</label>
                              <input class="form-control" type="text" name="bobot" required="required">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 1</label>
                              <input class="form-control" type="text" name="kriteria1">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 2</label>
                              <input class="form-control" type="text" name="kriteria2">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 3</label>
                              <input class="form-control" type="text" name="kriteria3">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 4</label>
                              <input class="form-control" type="text" name="kriteria4">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 5</label>
                              <input class="form-control" type="text" name="kriteria5">
                            </div>
                          </div>
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


<!-- Modal Update Data Kriteria -->

<div class="modal fade kriteria" id="modal-update-data-kriteria" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form id="UpdateKriteria">
        <div class="modal-header">
          <h4 class="modal-title">Update Data Kriteria</h4>
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
                              <label>Kode</label>
                              <input class="form-control" type="text" name="kode" required="required">
                            </div>
                            <div class="form-group">
                              <label>Nama Kriteria</label>
                              <input class="form-control" type="text" name="nama_kriteria" required="required">
                            </div>
                              <div class="form-group">
                              <label>Sifat Kriteria</label>
                                  <select class="form-control" name="sifat" placeholder="sifat">
                                        <option> --- Sifat Kriteria --- </option>
                                          <option value="Benefit">Benefit</option>
                                            <option value="Cost">Cost</option>             
                                          </select>
                            </div>
                            <div class="form-group">
                              <label>Bobot Kriteria</label>
                              <input class="form-control" type="text" name="bobot" required="required">
                            </div>
                            <!-- <div class="form-group">
                              <label>Kriteria 1</label>
                              <input class="form-control" type="text" name="kriteria1">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 2</label>
                              <input class="form-control" type="text" name="kriteria2">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 3</label>
                              <input class="form-control" type="text" name="kriteria3">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 4</label>
                              <input class="form-control" type="text" name="kriteria4">
                            </div>
                            <div class="form-group">
                              <label>Kriteria 5</label>
                              <input class="form-control" type="text" name="kriteria5">
                            </div> -->
                          </div>
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
          <button class="btn btn-primary waves-effect waves-light btn-action cell preloader5" type="button" value="Simpan Data" id="update">Update
          </button>
          <div class="preloader3 loader-block">
              <div class="circ1"></div>
              <div class="circ2"></div>
              <div class="circ3"></div>
              <div class="circ4"></div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Update Data Item Kriteria -->

<div class="modal fade subkriteria" id="modal-update-data-item-kriteria" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form id="UpdateItemKriteria" method="POST" action="{{ url('/data-kriteria/updateSubKriteria') }}">
        <!-- <form id="UpdateItemKriteria" > -->
        <div class="modal-header">
          <h4 class="modal-title">Update Data Item Kriteria</h4>
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
                              <label>Kriteria 1</label>
                              <input class="form-control" type="text" name="itemKriteria1">
                              <input class="form-control" type="hidden" name="kdSubKriteria1">
                              <label>Value</label>
                              <span><input class="form-control" type="text" name="value1" readonly="readonly"></span>
                            </div>
                            <div class="form-group">
                              <label>Kriteria 2</label>
                              <input class="form-control" type="text" name="itemKriteria2">
                              <input class="form-control" type="hidden" name="kdSubKriteria2">
                              <label>Value</label>
                              <span><input class="form-control" type="text" name="value2" readonly="readonly"></span>
                            </div>
                            <div class="form-group">
                              <label>Kriteria 3</label>
                              <input class="form-control" type="text" name="itemKriteria3">
                              <input class="form-control" type="hidden" name="kdSubKriteria3">
                              <label>Value</label>
                              <span><input class="form-control" type="text" name="value3" readonly="readonly"></span>
                            </div>
                            <div class="form-group">
                              <label>Kriteria 4</label>
                              <input class="form-control" type="text" name="itemKriteria4">
                              <input class="form-control" type="hidden" name="kdSubKriteria4">
                              <label>Value</label>
                              <span><input class="form-control" type="text" name="value4" readonly="readonly"></span>
                            </div>
                            <div class="form-group">
                              <label>Kriteria 5</label>
                              <input class="form-control" type="text" name="itemKriteria5">
                              <input class="form-control" type="hidden" name="kdSubKriteria5">
                              <label>Value</label>
                              <span><input class="form-control" type="text" name="value5" readonly="readonly"></span>
                            </div>
                          </div>
                        </div>
                        <div class="form-body">
                        <input id="id" name="kdKriteria" placeholder="Kode Kriteria" class="form-control"
                               type="hidden">
                        <!-- <?php
                        $no = 1;

                        for ($no; $no <= 5; $no++) {
                            ?> -->
                            <!-- <div class="form-group">
                                <label class="control-label col-md-4">Item Kriteria <span><?php echo $no ?></span></label>
                                <div class="col-md-8">
                                    <input name="itemKriteria<?php echo $no ?>"
                                           placeholder="Item Kriteria <?php echo $no ?>" class="form-control"
                                           type="text">
                                    <input name="id<?php echo $no ?>" type="hidden">
                                </div>
                                <div class="col-sm-4">
                                    <label class="control-label col-md-4">Value</label>
                                    <div class="col-md-6">
                                        <input name="value<?php echo $no ?>" placeholder="" class="form-control"
                                               type="text" readonly>
                                    </div>
                                </div>
                            </div> -->
                        <!-- <?php }
                        ?> -->

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
          <!-- <button class="btn btn-primary waves-effect waves-light btn-action cell preloader5" type="button" value="Simpan Data" id="update">Update
          </button> -->
          <!-- <button type="button" class="btn btn-primary waves-effect waves-light btn-action cell preloader5" id="btnSave" onclick="save_item_kriteria()" class="btn btn-primary">Save</button> -->
          <button type="submit" class="btn btn-primary waves-effect waves-light btn-action cell preloader5" id=""  class="btn btn-primary">Save</button>
          <div class="preloader3 loader-block">
              <div class="circ1"></div>
              <div class="circ2"></div>
              <div class="circ3"></div>
              <div class="circ4"></div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>