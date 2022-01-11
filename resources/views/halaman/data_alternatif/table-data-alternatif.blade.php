<div class="card">  
  <div class="card-block">
    <div class="dt-responsive table-responsive">
      <table id="data-alternatif" class="table table-striped table-bordered nowrap">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Pendidikan</th>
            <th>Foto</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0; ?>
          @foreach($data as $db)
          <?php $no++; ?>  
            <tr class="data-id-{{ $db->id }}">
              <td>{{ $no }}</td>
              <td>{{ $db->nama }}</td>
              <td>{{ $db->umur }}</td>
              <td>{{ $db->alamat }}</td>
              <td>{{ $db->pendidikan }}</td>
              <!-- <td>{{ $db->foto }}</td> -->
                 <td><img src="{{$db->foto}}" class="image image-responsive" height="150" width="150"></td>
            
              <td>
                <a href="javascript:void(0);" class="btn btn-primary btn-outline-primary btn-sm EditData" data-id="{{ $db->id }}" data-nama="{{ $db->nama }}" data-tgl_lahir="{{ $db->tgl_lahir }}" data-pendidikan="{{ $db->pendidikan }}"data-umur="{{ $db->umur }}" data-berat_badan="{{ $db->berat_badan }}" data-alamat="{{ $db->alamat }}" data-tinggi_badan="{{ $db->tinggi_badan }}" onclick="editData(this)">
                  <i class="icofont icofont-edit-alt"></i>
                </a>
                <!-- <a href="{{ url('/data-alternatif/edit/'.$db->id) }}" class="btn btn-danger btn-outline-danger btn-sm">
                  <i class="icofont icofont-edit-alt"></i>
                </a> -->
                <a href="javascript:void(0);" class="btn btn-danger btn-outline-danger btn-sm" data-id="{{ $db->id }}" data-nama="{{ $db->nama }}" data-tgl_lahir="{{ $db->tgl_lahir }}" data-pendidikan="{{ $db->pendidikan }}"data-umur="{{ $db->umur }}" data-berat_badan="{{ $db->berat_badan }}" data-alamat="{{ $db->alamat }}" data-tinggi_badan="{{ $db->tinggi_badan }}"  id="DeleteData" onclick="DeleteData(this)">
                  <i class="icofont icofont-delete-alt"></i>
                </a>
            </td>
            </tr>
          @endforeach
        </tbody>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Pendidikan</th>
            <th>Actions</th>
          </tr>
        </thead>
      
      </table>
    </div>
  </div>
</div>