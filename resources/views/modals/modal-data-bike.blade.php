<!-- Modal Create Data Employee -->
<div class="modal fade DataBike" id="modal-create-data-bike" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="" method="post" id="AddDataBike">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Karyawan</h4>
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
                              <label>Nik Karyawan</label>
                              <input class="form-control" type="text" name="merk" required="required">
                            </div>
                            <div class="form-group">
                              <label>Nama Karyawan</label>
                              <input class="form-control" type="text" name="harga" required="required">
                            </div>
                            <div class="form-group">
                              <label>Divisi</label>
                              <input class="form-control" type="text" name="berat" required="required">
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
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Update Data Employee -->

<div class="modal fade DataEmployee" id="modal-update-data-employee" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form id="UpdateDataEmployee">
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
                              <label>Nik Karyawan</label>
                              <input class="form-control" type="text" name="Nik" required="required" readonly="">
                            </div>
                            <div class="form-group">
                              <label>Nama Karyawan</label>
                              <input class="form-control" type="text" name="NamaKaryawan" required="required">
                            </div>
                            <div class="form-group">
                              <label>Divisi</label>
                              <input class="form-control" type="text" name="Divisi" required="required">
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
          <div class="wrapper-load">
            <button class="btn btn-primary waves-effect waves-light btn-action cell preloader5" type="button" value="Simpan Data" id="update">Update
            </button>
            <div class="preloader3 loader-block">
              <div class="circ1"></div>
              <div class="circ2"></div>
              <div class="circ3"></div>
              <div class="circ4"></div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>