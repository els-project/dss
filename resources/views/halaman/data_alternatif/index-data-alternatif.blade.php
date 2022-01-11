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

@section('custom-scripts')

  <script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });
    })

    /* Reset field in modal add data employee */
    $(function () {
        $('#modal-create-data-alternatif').on('hidden.bs.modal', function () {
        $('#modal-create-data-alternatif form')[0].reset();
           
      });
    });

    /* Reset field in modal update data employee */
    $(function () {
        $('#modal-update-data-alternatif').on('hidden.bs.modal', function () {
           
      });
    });

    /* Edit data employee */
        function editData(data) {
            $('#modal-update-data-alternatif input[name="id"]').val(data.getAttribute('data-id'));
            $('#modal-update-data-alternatif input[name="nama"]').val(data.getAttribute('data-nama'));
            $('#modal-update-data-alternatif input[name="tgl_lahir"]').val(data.getAttribute('data-tgl_lahir'));
            $('#modal-update-data-alternatif input[name="pendidikan"]').val(data.getAttribute('data-pendidikan'));
            $('#modal-update-data-alternatif input[name="umur"]').val(data.getAttribute('data-umur'));
            $('#modal-update-data-alternatif input[name="berat_badan"]').val(data.getAttribute('data-berat_badan'));
            $('#modal-update-data-alternatif input[name="alamat"]').val(data.getAttribute('data-alamat'));
            $('#modal-update-data-alternatif input[name="tinggi_badan"]').val(data.getAttribute('data-tinggi_badan'));
            

            $('#modal-update-data-alternatif').modal('show');
            // $('#modal-create-data-alternatif').modal('show');
        };

        


    $('#tabs-data-alternatif .nav-item .nav-link').click(function () {
        var $DataTabs = $(this).data('tabs');
       //  var formData = {
       //    '_token': token, 
       //    'rowId': rowId
       //  };

       //  $.ajax({
       //    type: 'POST',
       //    url: my_url,
       //    data: formData,
       //    dataType: 'json',
       //    success: function (data) {
       //      console.log(data);
       //        if(data) {
       //          $('#cart_total').html(data.cart_total);
       //          $(elm).closest('tr').remove();
       //        } else {

       //        }
       //    }
        // });
    });

    /* Create Or Added Data Employee */
    $(function() {
        $('#AddAlternatif').on('submit', function(event){
            event.preventDefault();
            var formData = $(this).serialize();
            console.log(formData);
            

            $.ajax({
            type: 'POST',
            url: 'data-alternatif/create',
            data: formData,
            success: function(data) {
                var $elements = "<tr role='row' class='"+ data.id +"'>"+
                                                "<td class='sorting_1'>"+ (data.id - 1) +"</td>" +
                                                "<td>"+ data.nama + "</td>" +
                                                "<td>"+ data.umur +"</td>" +
                                                // "<td>"+ data.tgl_lahir +"</td>" +
                                                "<td>"+ data.alamat +"</td>" +
                                                "<td>"+ data.pendidikan +"</td>" +
                                                
                                                // "<td>"+ data.berat_badan +"</td>" +
                                                
                                                // "<td>"+ data.tinggi_badan +"</td>" +
                                            
                                                        "<td>"+
                                                "<a href='javascript:void(0);' class='btn btn-primary btn-outline-primary btn-sm EditData' data-id='"+ data.id +"' data-nama='"+ data.nama +"' data-tgl_lahir='"+ data.tgl_lahir +"' data-pendidikan='"+ data.pendidikan +"'data-umur='"+ data.umur +"'data-berat_badan='"+ data.berat_badan +"'data-alamat='"+ data.alamat +"'data-tinggi_badan='"+ data.tinggi_badan +"' onclick='editData(this)' style='margin-right: 4px;'>"+
                                                    "<i class='icofont icofont-edit-alt'></i>"+
                                                "</a>"+
                                                "<a href='javascript:void(0);' class='btn btn-danger btn-outline-danger btn-sm' data-id='"+ data.id +"' data-nama='"+ data.nama +"' data-tgl_lahir='"+ data.tgl_lahir +"' data-pendidikan='"+ data.pendidikan +"' data-pendidikan='"+ data.pendidikan +"'data-pendidikan='"+ data.pendidikan +"'data-pendidikan='"+ data.pendidikan +"'data-pendidikan='"+ data.pendidikan +"' id='DeleteData' onclick='DeleteData(this)'>"+
                                                    "<i class='icofont icofont-delete-alt'></i>"+
                                                "</a>"+
                                              "</td>" +
                                          "</tr>";
            $('#data-alternatif tbody').append($elements);
            $('#modal-create-data-alternatif').modal('hide');
            // }
            }
            });
        });
    });

    /* Update Data Employee */
    $(function() {
        $('#UpdateAlternatif #update').on('click', function(){
            $('#UpdateAlternatif .modal-footer .wrapper-load .preloader3').css('display', 'inline-flex');

            var $data = {
                        'id'                : $('#modal-update-data-alternatif [name="id"]').val(),
              'nama'         : $('#modal-update-data-alternatif [name="nama"]').val(),
              'tgl_lahir'    : $('#modal-update-data-alternatif [name="tgl_lahir"]').val(),
              'pendidikan'    : $('#modal-update-data-alternatif [name="pendidikan"]').val(),
              'umur'    : $('#modal-update-data-alternatif [name="umur"]').val(),
              'berat_badan'    : $('#modal-update-data-alternatif [name="berat_badan"]').val(),
              'alamat'    : $('#modal-update-data-alternatif [name="alamat"]').val(),
              'tinggi_badan'    : $('#modal-update-data-alternatif [name="tinggi_badan"]').val(),
              
            };

            $.ajax({
            type: 'POST',
            url: 'data-alternatif/update',
            data: $data,
            success: function(data) {
                var $elements = "<tr role='row' class='"+ data.id+"'>" +
                                                "<td class='sorting_1'>"+ (data.id) +"</td>" +
                                                "<td>"+ data.nama + "</td>" +
                                                "<td>"+ data.umur +"</td>" +
                                                "<td>"+ data.alamat +"</td>" +
                                                // "<td>"+ data.tgl_lahir +"</td>" +
                                                "<td>"+ data.pendidikan +"</td>" +
                                                // "<td>"+ data.umur +"</td>" +
                                                // "<td>"+ data.berat_badan +"</td>" +
                                                // "<td>"+ data.alamat +"</td>" +
                                                 // "<td>"+ data.tinggi_badan +"</td>" +
                                               
                                                        "<td>"+
                                                "<a href='javascript:void(0);' class='btn btn-primary btn-outline-primary btn-sm EditData' data-id='"+ data.id +"' data-nama='"+ data.nama +"' data-tgl_lahir='"+ data.tgl_lahir +"' data-pendidikan='"+ data.pendidikan +"' data-umur='"+ data.umur +"' data-berat_badan='"+ data.berat_badan +"'data-alamat='"+ data.alamat +"'data-tinggi_badan='"+ data.tinggi_badan +"' onclick='editData(this)' style='margin-right: 4px;'>"+
                                                    "<i class='icofont icofont-edit-alt'></i>"+
                                                "</a>"+
                                                "<a href='javascript:void(0);' class='btn btn-danger btn-outline-danger btn-sm' data-id='"+ data.id +"' data-nama='"+ data.nama +"' data-tgl_lahir='"+ data.tgl_lahir +"'data-pendidikan='"+ data.pendidikan +"' data-umur='"+ data.umur +"' data-berat_badan='"+ data.berat_badan +"' data-alamat='"+ data.alamat +"' data-tinggi_badan='"+ data.tinggi_badan +"' id='DeleteData' onclick='DeleteData(this)'>"+
                                                    "<i class='icofont icofont-delete-alt'></i>"+
                                                "</a>"+
                                            "</td>" +
                                        "</tr>";
            $('#data-alternatif tbody .data-id-'+ data.id).replaceWith($elements);
            $('#modal-update-data-alternatif').modal('hide');
                    $('#UpdateAlternatif .modal-footer .wrapper-load .preloader3').hide();

            // }
            }
            });
        });
    });

    /* Select change divisi modal create */
        

    function DeleteData(data) {
        var $nama            = data.getAttribute('data-nama'),
                $pendidikan       = data.getAttribute('data-pendidikan'),
                $id            = data.getAttribute('data-id'),
                $umur       = data.getAttribute('data-umur'),
                $Id             = data.getAttribute('data-id'),
                $ClassId    = data.getAttribute('id');

        swal({
                    title: "Delete "+'\n'+ $nama +'\n'+ $pendidikan +'\n'+ $umur +'\n'+$id ,
                    text: "Apa anda yakin akan menghapus data ini!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger "+ $ClassId +"-"+ $Id ,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Delete",
                    className: "red-bg",
                    closeOnConfirm: false
                },
            function(isConfirm){
                var $id             = data.getAttribute('data-id'),
                        $nama       = data.getAttribute('nama');
                         $pendidikan       = data.getAttribute('data-pendidikan');
                        $umur       = data.getAttribute('data-umur');
                         
                $.ajax({
            type: 'post',
            url: 'data-alternatif/deleted',
            data: {'id' : $id, 'nama' : $nama,'pendidikan' : $pendidikan,'umur' : $umur },
            success: function(data) {
              $('#data-alternatif tbody .data-id-'+ $Id).remove();
                            swal({
                                title   : "Deleted!", 
                                text        : "Data telah berhasil dihapus.", 
                                type        : "success",
                                showConfirmButton: false,
                                timer: 800,
                                });
            }
        });
            });
    };


    $('#data-alternatif').DataTable({
        buttons: {
            buttons: [
                {
                    text: 'Alert',
                    action: function ( e, dt, node, config ) {
                        alert( 'Activated!' );
                        
                    }
                }
            ]
        }
    });

    
  </script>
   
   <script type="text/javascript">
    $(document).ready(function(){

        $('#data-alternatif_wrapper .paginate_button .page-link').on('click', function() {

        })

    })
   </script>
@endsection

@section('content')
    <!-- Head Data Karayawan -->
    @include('halaman.data_alternatif.head-data-alternatif')
    <!-- End Data Karyawan -->

    <!-- Tab Data Karyawan -->
    @include('halaman.data_alternatif.tab-data-alternatif')
    <!-- End Tab Data Karyawan -->
@endsection

@section('modals')
  @include('modals.modal-data-alternatif')
@endsection