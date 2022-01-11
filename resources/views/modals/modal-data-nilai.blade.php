<!-- Modal Create Data Employee -->
<div class="modal fade Sepeda" id="modal-create-data-nilai" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="" method="post" id="AddNilai">
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
                              <label>Sifat Kriteria</label>
                                  <select class="form-control" name="sifat" placeholder="sifat">
                                      <option></option>
                                        <option disabled selected> --- Ngaran Pegawai --- </option>
                                          <option value="Benefit">Benefit</option>
                                            <option value="Cost">Cost</option>             
                                          </select>
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


<!-- Modal Update Data Employee -->

