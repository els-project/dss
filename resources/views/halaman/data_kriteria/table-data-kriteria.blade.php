<div class="card">  
  <div class="card-block">
    <div class="dt-responsive table-responsive">
      <table id="data-kriteria" class="table table-striped table-bordered nowrap">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
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
            <tr class="data-id-{{ $db->id }}">
              <td>{{ $no }}</td>
              <td>{{ $db->kode }}</td>
              <td>{{ $db->nama_kriteria }}</td>
              <td>{{ $db->sifat }}</td>
              <td>{{ $db->bobot }}</td>
              <!-- <td>{{ $db->sub_kriteria }}</td> -->
            
              <td>
                <a href="javascript:void(0);" class="btn btn-primary btn-outline-primary btn-sm EditData" title="Edit Kriteria" data-id="{{ $db->id }}" data-kode="{{ $db->kode }}" data-nama_kriteria="{{ $db->nama_kriteria }}" data-sifat="{{ $db->sifat }}" data-bobot="{{ $db->bobot }}" onclick="editData(this)">
                  <i class="icofont icofont-edit-alt"></i>
                </a>

                <a href="javascript:void(0);" class="btn btn-primary btn-outline-primary btn-sm EditDataItem" title="Edit Item Kriteria" sub-id="{{ $db->id }}" sub-kriteria1="{{ $db->kriteria1 }}" sub-kriteria2="{{ $db->kriteria2 }}" sub-kiteria2="{{ $db->kriteria2 }}" sub-kriterai3="{{ $db->kriteria3 }}"sub-kriteria4="{{ $db->kriteria4 }}" sub-kriteria5="{{ $db->kriteria5 }}" onclick="edit_item_kriteria(<?php echo $db->id; ?>)">
                  <i class="icofont icofont-edit-alt"></i>
                </a>

                <a href="javascript:void(0);" class="btn btn-danger btn-outline-danger btn-sm" title="Delete Kriteria" data-id="{{ $db->id }}" data-kode="{{ $db->kode }}" data-nama_kriteria="{{ $db->nama_kriteria }}" data-sifat="{{ $db->sifat }}" data-bobot="{{ $db->bobot }}" id="DeleteData" onclick="DeleteData(this)">
                  <i class="icofont icofont-delete-alt"></i>
                </a>
            </td>
            </tr>
          @endforeach
        </tbody>
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Kriteria</th>
            <th>Sifat Kriteria</th>
            <th>Bobot Kriteria</th>
            <th>Actions</th>
          </tr>
        </thead>
      
      </table>
    </div>
  </div>
</div>