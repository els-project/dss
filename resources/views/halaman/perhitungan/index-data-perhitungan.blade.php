@extends('index')

@section('title', 'Data Nilai')

@section('title-breadcrumb', 'Data Nilai')

@section('subtitle-breadcrumb', 'Data Nilai')

@section('breadcrumb-1', 'Data Nilai')

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
        $('#modal-create-data-kriteria').on('hidden.bs.modal', function () {
        $('#modal-create-data-kriteria form')[0].reset();
           
      });
    });

    /* Reset field in modal update data employee */
    $(function () {
        $('#modal-update-data-kriteria').on('hidden.bs.modal', function () {
           
      });
    });

    /* Edit data kriteria */
        function editData(data) {
             $('#modal-update-data-kriteria input[name="id"]').val(data.getAttribute('data-id'));
            $('#modal-update-data-kriteria input[name="nama_kriteria"]').val(data.getAttribute('data-nama_kriteria'));
            // $('#modal-update-data-kriteria input[name="sifat"]').val(data.getAttribute('data-sifat'));
            $('#modal-update-data-kriteria select[name="sifat"] option:selected').val(data.getAttribute('data-sifat'));
            $('#modal-update-data-kriteria input[name="bobot"]').val(data.getAttribute('data-bobot'));
            // $('#modal-update-data-kriteria input[name="kriteria1"]').val(data.getAttribute('data-kriteria1'));
            // $('#modal-update-data-kriteria input[name="kriteria2"]').val(data.getAttribute('data-kriteria2'));
            // $('#modal-update-data-kriteria input[name="kriteria3"]').val(data.getAttribute('data-kriteria3'));
            // $('#modal-update-data-kriteria input[name="kriteria4"]').val(data.getAttribute('data-kriteria4'));
            // $('#modal-update-data-kriteria input[name="data-kriteria5"]').val(data.getAttribute('data-kriteria5'));
            

            $('#modal-update-data-kriteria').modal('show');
        };

    /* Edit data item kriteria */
        function editDataItem(data) {
            //  $('#modal-update-data-kriteria input[name="id"]').val(data.getAttribute('data-id'));
            // $('#modal-update-data-kriteria input[name="nama_kriteria"]').val(data.getAttribute('data-nama_kriteria'));
            // $('#modal-update-data-kriteria input[name="sifat"]').val(data.getAttribute('data-sifat'));
            // $('#modal-update-data-kriteria select[name="sifat"] option:selected').val(data.getAttribute('data-sifat'));
            // $('#modal-update-data-kriteria input[name="bobot"]').val(data.getAttribute('data-bobot'));
            $('#modal-update-data-item-kriteria input[name="kriteria1"]').val(data.getAttribute('sub-kriteria1'));
            $('#modal-update-data-item-kriteria input[name="kriteria2"]').val(data.getAttribute('sub-kriteria2'));
            $('#modal-update-data-item-kriteria input[name="kriteria3"]').val(data.getAttribute('sub-kriteria3'));
            $('#modal-update-data-item-kriteria input[name="kriteria4"]').val(data.getAttribute('sub-kriteria4'));
            $('#modal-update-data-item-kriteria input[name="kriteria5"]').val(data.getAttribute('sub-kriteria5'));
            

            $('#modal-update-data-item-kriteria').modal('show');
        };


    $('#tabs-data-kriteria .nav-item .nav-link').click(function () {
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

    /* Create Or Added Data Kriteria */
    $(function() {
        $('#AddKriteria').on('submit', function(event){
            event.preventDefault();
            var formData = $(this).serialize();
            console.log(formData);

            $.ajax({
            type: 'POST',
            url: 'data-kriteria/create',
            data: formData,
            success: function(data) {
                var $elements = "<tr role='row' class='"+ data.id +"'>"+
                                                "<td class='sorting_1'>"+ (data.id - 1) +"</td>" +
                                                "<td>"+ data.nama_kriteria + "</td>" +
                                                "<td>"+ data.sifat +"</td>" +
                                                "<td>"+ data.bobot +"</td>" +
                                              "<td>"+
                                                "<a href='javascript:void(0);' class='btn btn-primary btn-outline-primary btn-sm EditData' data-id='"+ data.id +"' data-nama_kriteria='"+ data.nama_kriteria +"' data-sifat='"+ data.sifat + "' data-bobot='"+ data.bobot + "'onclick='editData(this)' style='margin-right: 4px;'>"+
                                                    "<i class='icofont icofont-edit-alt'></i>"+
                                                "</a>"+
                                                "<a href='javascript:void(0);' class='btn btn-danger btn-outline-danger btn-sm' data-id='"+ data.id +"' data-nama_kriteria='"+ data.nama_kriteria +"' data-sifat='"+ data.sifat +"' data-bobot='"+ data.bobot +"'  id='DeleteData' onclick='DeleteData(this)'>"+
                                                    "<i class='icofont icofont-delete-alt'></i>"+
                                                "</a>"+
                                              "</td>" +
                                          "</tr>";
            $('#data-kriteria tbody').append($elements);
            $('#modal-create-data-kriteria').modal('hide');
            // }
            }
            });
        });
    });

    /* Update Data Kriteria */
    $(function() {
        $('#UpdateKriteria #update').on('click', function(){
            $('#UpdateKriteria .modal-footer .wrapper-load .preloader3').css('display', 'inline-flex');

            var $data = {
              'id'                : $('#modal-update-data-kriteria [name="id"]').val(),
              'nama_kriteria'         : $('#modal-update-data-kriteria [name="nama_kriteria"]').val(),
              'sifat'    : $('#modal-update-data-kriteria [name="sifat"]').val(),
              'bobot'    : $('#modal-update-data-kriteria [name="bobot"]').val(),
              // 'kriteria1'    : $('#modal-update-data-kriteria [name="kriteria1"]').val(),
              // 'kriteria2'    : $('#modal-update-data-kriteria [name="kriteria2"]').val(),
              // 'kriteria3'    : $('#modal-update-data-kriteria [name="kriteria3"]').val(),
              // 'kriteria4'    : $('#modal-update-data-kriteria [name="kriteria4"]').val(),
              // 'kriteria5'    : $('#modal-update-data-kriteria [name="kriteria5"]').val(),
            };
            // console.log(data);

            $.ajax({
            type: 'POST',
            url: 'data-kriteria/update',
            data: $data,
            success: function(data) {
                var $elements = "<tr role='row' class='"+ data.id+"'>" +
                                                "<td class='sorting_1'>"+ (data.id) +"</td>" +
                                                "<td>"+ data.nama_kriteria + "</td>" +
                                                "<td>"+ data.sifat +"</td>" +
                                                "<td>"+ data.bobot +"</td>" +
                                               
                                            "<td>"+
                                                "<a href='javascript:void(0);' class='btn btn-primary btn-outline-primary btn-sm EditData' data-id='"+ data.id +"' data-nama_kriteria='"+ data.nama_kriteria +"' data-sifat='"+ data.sifat +"' data-bobot='"+ data.bobot + "' onclick='editData(this)' style='margin-right: 4px;'>"+
                                                    "<i class='icofont icofont-edit-alt'></i>"+
                                                "</a>"+
                                                "<a href='javascript:void(0);' class='btn btn-danger btn-outline-danger btn-sm' data-id='"+ data.id +"' data-nama_kriteria='"+ data.nama_kriteria +"' data-sifat='"+ data.sifat +"'data-bobot='"+ data.bobot + "' id='DeleteData' onclick='DeleteData(this)'>"+
                                                    "<i class='icofont icofont-delete-alt'></i>"+
                                                "</a>"+
                                            "</td>" +
                                        "</tr>";
            $('#data-kriteria tbody .data-id-'+ data.id).replaceWith($elements);
            $('#modal-update-data-kriteria').modal('hide');
                    $('#UpdateKriteria .modal-footer .wrapper-load .preloader3').hide();

            // }
            }
            });
        });
    });


    /* Update Data Item Kriteria */
    $(function() {
        $('#UpdateKriteria #update').on('click', function(){
            $('#UpdateKriteria .modal-footer .wrapper-load .preloader3').css('display', 'inline-flex');

            var $data = {
              'id'                : $('#modal-update-data-kriteria [name="id"]').val(),
              // 'nama_kriteria'         : $('#modal-update-data-kriteria [name="nama_kriteria"]').val(),
              // 'sifat'    : $('#modal-update-data-kriteria [name="sifat"]').val(),
              // 'bobot'    : $('#modal-update-data-kriteria [name="bobot"]').val(),
              'kriteria1'    : $('#modal-update-data-kriteria [name="kriteria1"]').val(),
              'kriteria2'    : $('#modal-update-data-kriteria [name="kriteria2"]').val(),
              'kriteria3'    : $('#modal-update-data-kriteria [name="kriteria3"]').val(),
              'kriteria4'    : $('#modal-update-data-kriteria [name="kriteria4"]').val(),
              'kriteria5'    : $('#modal-update-data-kriteria [name="kriteria5"]').val(),
            };

            $.ajax({
            type: 'POST',
            url: 'data-kriteria/update_item',
            data: $data,
            success: function(data) {
                var $elements = "<tr role='row' class='"+ data.id+"'>" +
                                                "<td class='sorting_1'>"+ (data.id) +"</td>" +
                                                "<td>"+ data.nama_kriteria + "</td>" +
                                                "<td>"+ data.sifat +"</td>" +
                                                "<td>"+ data.bobot +"</td>" +
                                               
                                            "<td>"+
                                                "<a href='javascript:void(0);' class='btn btn-primary btn-outline-primary btn-sm EditData' data-id='"+ data.id +"' data-nama_kriteria='"+ data.nama_kriteria +"' data-sifat='"+ data.sifat +"' data-bobot='"+ data.bobot + "' onclick='editData(this)' style='margin-right: 4px;'>"+
                                                    "<i class='icofont icofont-edit-alt'></i>"+
                                                "</a>"+
                                                "<a href='javascript:void(0);' class='btn btn-danger btn-outline-danger btn-sm' data-id='"+ data.id +"' data-nama_kriteria='"+ data.nama_kriteria +"' data-sifat='"+ data.sifat +"'data-bobot='"+ data.bobot + "' id='DeleteData' onclick='DeleteData(this)'>"+
                                                    "<i class='icofont icofont-delete-alt'></i>"+
                                                "</a>"+
                                            "</td>" +
                                        "</tr>";
            $('#data-kriteria tbody .data-id-'+ data.id).replaceWith($elements);
            $('#modal-update-data-kriteria').modal('hide');
                    $('#UpdateKriteria .modal-footer .wrapper-load .preloader3').hide();

            // }
            }
            });
        });
    });

    /* Select change divisi modal create */
        

    function DeleteData(data) {
        var $nama_kriteria            = data.getAttribute('nama_kriteria'),
                $sifat       = data.getAttribute('data-sifat'),
                $bobot       = data.getAttribute('data-bobot'),
                $Id             = data.getAttribute('data-id_kriteria'),
                $ClassId    = data.getAttribute('id_kriteria');

        swal({
                    title: "Delete "+'\n'+ $nama_kriteria +'\n'+ $sifat +'\n'+ $bobot +'\n'+$id_kriteria ,
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
                var $id_kriteria             = data.getAttribute('data-id_kriteria'),
                        $nama_kriteria       = data.getAttribute('nama_kriteria');
                         $sifat       = data.getAttribute('data-sifat');
                        $bobot       = data.getAttribute('data-bobot');
                         
                $.ajax({
            type: 'post',
            url: 'data-kriteria/deleted',
            data: {'id_kriteria' : $id_kriteria, 'nama_kriteria' : $nama_kriteria,'sifat' : $sifat,'bobot' : $bobot },
            success: function(data) {
              $('#data-sepeda tbody .data-id-'+ $Id).remove();
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

    // $('.deleted-data-posting').on('click',  function(){
    //     var id = $(this).data('id');
    //     var title = $(this).data('title');
    //     var dir = $(this).data('dir');
    //     var idpost = $(this).data('post');
    //     var bananerpost = $(this).data('banner');

    //     setTimeout(function() {
    //       $('#field').attr('data-id', id);
    //       $('#field').attr('data-dir', dir);
    //       $('#field').attr('data-post', idpost);
    //       $('#field').attr('data-banner', bananerpost);
    //     }, 500);

    //     swal({
    //         title: "Anda yakin ingin menghapus ?",
    //         text: "Posting = " + title,
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#DD6B55",
    //         confirmButtonText: "Hapus",
    //         cancelButtonText: "Batal",
    //         closeOnConfirm: false,
    //         closeOnCancel: false
    //     },
    //     function(isConfirm){
    //       var id = $('#field').data('id');
    //       var datadir = $('#field').data('dir');
    //       var idpost = $('#field').data('post');
    //       var bannerPost = $('#field').data('banner');

    //       var data = {id: id, datadir: datadir, idpost: idpost, banner: bannerPost  };
    //       if (isConfirm) {
    //         swal("Berhasil !!", "Data telah berhasil di hapus !!", "success");
    //         $.ajax({
    //           url : "",
    //           type: "POST",
    //           data: data,
    //           dataType : 'html',
    //           cache:false,
    //           success:function(data) {
    //             location.reload();
    //           }
    //         });
    //       }
    //       else {
    //         swal("Batal !!", "Data telah di gagal di hapus !!", "error");
    //       }
    //     });
        
    // });

    $('#data-perhitungan').DataTable({
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

        $('#data-kriteria_wrapper .paginate_button .page-link').on('click', function() {

        })

    })
   </script>
@endsection

@section('content')
    <!-- Head Data Karayawan -->
    @include('halaman.perhitungan.head-data-perhitungan')
    <!-- End Data Karyawan -->

    <!-- Tab Data Karyawan -->
    @include('halaman.perhitungan.tab-data-perhitungan')
    <!-- End Tab Data Karyawan -->
@endsection

@section('modals')
  
@endsection