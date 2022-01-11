<div class="card">  
  <div class="card-block">
    <div class="dt-responsive table-responsive">
      <table id="data-nilai" class="table table-striped table-bordered nowrap">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <!-- <th>Nama Kriteria</th> -->
            @foreach($Kriteria as $krit)
                <th>{{$krit->nama_kriteria}}</th>
            @endforeach
            <!-- <th>Umur</th> -->
            <!-- <th>Alamat</th> -->
            <!-- <th>Nilai</th> -->
            <!-- <th>Actions</th> -->
          </tr>
        </thead>
        <tbody>
                        <?php $no = 1; ?>
                        @foreach($Alternatif as $mhs)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$mhs->nama}}</td>
                            
                            @if(count($mhs->nilai) == 0)
                            @foreach($Kriteria as $krit)
                            <td><i>Tidak ada data</i></td>
                            @endforeach
                            @endif
                            
                            @foreach($mhs->nilai as $nilai1)
                            <td>{{$nilai1->nilai}}</td>
                            @endforeach
                            
                            
                            
                        </tr>
                        @endforeach
                    </tbody>
      
      </table>
    </div>
  </div>
</div>