<div class="card">  
  <div class="card-block">
    <div class="dt-responsive table-responsive">
      <!-- <table id="data-rangking" class="table table-striped table-bordered nowrap">
        <caption>Table 1 - Nilai Awal</caption>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kriteria</th>
            <th>Sifat Kriteria</th>
            <th>Bobot Kriteria</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0; ?>
          @foreach($data as $db)
          <?php $no++; ?>  
              <td>{{ $no }}</td>
              <td>{{ $db->nama_kriteria }}</td>
              <td>{{ $db->sifat }}</td>
              <td>{{ $db->bobot }}</td>
            </tr>
          @endforeach
        </tbody>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Kriteria</th>
            <th>Sifat Kriteria</th>
            <th>Bobot Kriteria</th>
            <th>Actions</th>
          </tr>
        </thead>
      
      </table> -->
      <div class="panel-heading">Table Perhitungan</div>
            <div class="panel-body">
                <h2>Table 1 - Nilai Awal</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr class="active">
                            <th class="col-md-1 text-center">No</th>
                            <?php
                            $no = 1;
                            $table = $this->page->getData('table1');
                            foreach ($table as $item => $value) {
                                foreach ($value as $heading => $itemValue) {
                                    ?>
                                    <th class="text-center"><?php echo $heading ?></th>
                                    <?php
                                }
                                break;
                            }
                            ?>
                        </tr>
                        <?php
                        foreach ($table as $item => $value) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <?php
                                foreach ($value as $itemValue) {
                                    ?>
                                    <td><?php echo $itemValue ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>

                    </table>
                </div>
              </div>
    </div>
  </div>
</div>