
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="x5NmWohZSyyeqXfNunUksxsSHwfTWnph908RI4S1">
        <title>199609082020121007</title>
        <link href="/199609082020121007/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="/199609082020121007/assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
        <link href="/199609082020121007/assets/css/backend.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="/199609082020121007/assets/images/icon.png" type="image/x-icon">
        <style>
            body { padding-right: 0 !important; }
            .label-margin {
                margin-top: 10px !important;
                margin-bottom: 10px !important;
            }
            .rata-kanan { text-align: right; }
        </style>

        <script type="text/javascript">
            function myalert(type, text) {
                var color = '#66BB6A';
                var title = 'Good Job!';
                if(type == 'error') {
                    color = '#EF5350';
                    title = 'Oops...';
                }
                swal({
                    title: title,
                    text: text,
                    confirmButtonColor: color,
                    type: type
                });
            }

          // loading
            function loading_process() {
                $('#table-list').block({
                    message: '<span class="text-semibold"><i class="icon-spinner4 spinner position-left"></i>&nbsp; Processing</span>',
                    overlayCSS: {
                        backgroundColor: '#fff',
                        opacity: 0.8,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: '10px 15px',
                        color: '#fff',
                        width: 'auto',
                        '-webkit-border-radius': 2,
                        '-moz-border-radius': 2,
                        backgroundColor: '#333'
                    }
                });
            }

            function loading_md() {
                $('#table-list-md').block({
                    message: '<span class="text-semibold"><i class="icon-spinner4 spinner position-left"></i>&nbsp; Processing</span>',
                    overlayCSS: {
                        backgroundColor: '#fff',
                        opacity: 0.8,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: '10px 15px',
                        color: '#fff',
                        width: 'auto',
                        '-webkit-border-radius': 2,
                        '-moz-border-radius': 2,
                        backgroundColor: '#333'
                    }
                });
            }

            function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : evt.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
                return true;
            }
        </script>
    </head>
    <body>
        <div class="navbar navbar-inverse bg-indigo">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:#fff">199609082020121007</a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            <li class="dropdown">
                <p class="navbar-text">
                    <span class="label bg-success-400">Online</span>
                </p>
            </li>
        </ul>

        <div class="navbar-right">
            <p class="navbar-text">Welcome, Mr/Mrs</p>
        </div>
    </div>
</div>


<button type="button" class="hidden" id="alert_info"></button>
<button type="button" class="hidden" id="alert_info_2"></button>
<button type="button" class="hidden" id="alert_success"></button>
<button type="button" class="hidden" id="alert_error"></button>
<button type="button" class="hidden" id="alert_warning"></button>

		        <div class="page-container">
            <div class="page-content">
                <div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class=""><a href="<?=base_url();?>" id="home_menu"><i class="icon-home4"></i> <span>Data Pendaftar</span></a></li>                   
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>                <div class="content-wrapper">
                    <div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-grid5 position-left"></i> <span class="text-semibold">Data Pendaftar</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-component"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
        <ul class="breadcrumb">
            <li><a href="http://127.0.0.1:8000/home"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Data Pendaftar</li>
        </ul>
    </div>
</div>
                    <div class="content">
                            <div class="panel panel-flat">
    <div class="panel-heading">
			<!-- <h6 class="panel-title"> &nbsp <a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
			<div class="heading-elements">
				<a href="#" class="btn btn-default" data-toggle="modal" data-target="#insertUserModal"><i class="icon-plus2 position-left"></i>Create New</a>
			</div> -->
		</div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-basic table-condensed" id="userTable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Satker</th>
                        <th>Posisi Yang Dipilih</th>
                        <th>Bahasa Pemrograman yang dikuasai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
				<tbody>
					<?php foreach($pendaftaran as $pd) { ?>
						<tr>
							<td><?=$pd['id'];?></td>
							<td><?=$pd['nama'];?></td>
							<td><?=$pd['nip'];?></td>
							<td><?=$pd['satuan_kerja'];?></td>
							<td><?=$pd['posisi_yang_dipilih'];?></td>
							<td><?=$pd['bahasa_pemrograman_yang_dikuasai'];?></td>
							<td> <a href="<?=base_url('welcome/data_detail/'.$pd['id']);?>" class="btn btn-primary">Detail</a> </td>
						</tr>
					<?php } ?>
				</tbody>
            </table>
        </div>
    </div>
</div>
<a href="http://103.226.55.159/json/data_rekrutmen.json" id="dataUserLink"></a>
<script src="http://127.0.0.1:8000/js/backend.js"></script>
<script src="http://127.0.0.1:8000/js/notification.js"></script>
<script src="http://127.0.0.1:8000/js/datepicker.js"></script>
                            <script>
    $(document).ready( function (){ 
        $(".file-styled").uniform({
            fileButtonClass: 'action btn bg-warning'
        });

        $('#insert_user').submit(function (event){
            event.preventDefault();
            var name = $('#insert_name').val();
            var email = $('#insert_email').val();
            var password = $('#insert_password').val();
            var wa = $('#insert_wa').val();
            var nip = $('#insert_nip').val();
            var nik = $('#insert_nik').val();
            var tempat_lahir = $('#insert_tempat_lahir').val();
            var tanggal_lahir = $('#insert_tanggal_lahir').val();
            var gender = $('#insert_gender').val();
            var jenis_pegawai = $('#insert_jenis_pegawai').val();
            var finger_id = $('#insert_finger_id').val();
            var rolesData = JSON.parse($('#add_roles').val());
            
            if(!name){
                $("#alert_warning").trigger("click", 'Nama wajib diisi');
                return false;
            }

            if(!email){
                $("#alert_warning").trigger("click", 'Email wajib diisi');
                return false;
            }
            
            if(!validateEmail(email)){
                $("#alert_info").trigger("click", 'Format email tidak valid.');
                return false;
            }

            if(!password){
                $("#alert_warning").trigger("click", 'Password wajib diisi');
                return false
            }

            if(!wa) {
                $('#alert_warning').trigger('click', 'wa wajib diisi!');
                return false;
            }

            if(!nip) {
                $('#alert_warning').trigger('click', 'nip wajib diisi!');
                return false;
            }

            if(!nik) {
                $('#alert_warning').trigger('click', 'nik wajib diisi!');
                return false;
            }

            if(!tempat_lahir) {
                $('#alert_warning').trigger('click', 'tempat lahir wajib diisi!');
                return false;
            }

            if(!tanggal_lahir) {
                $('#alert_warning').trigger('click', 'tanggal lahir wajib diisi!');
                return false;
            }

            if(!gender) {
                $('#alert_warning').trigger('click', 'gender wajib diisi!');
                return false;
            }

            if(!jenis_pegawai) {
                $('#alert_warning').trigger('click', 'jenis pegawai wajib diisi!');
                return false;
            }

            if(!finger_id) {
                $('#alert_warning').trigger('click', 'finger id wajib diisi!');
                return false;
            }

            if(rolesData.length < 1){
                $("#alert_warning").trigger("click", 'role tidak boleh kosong!');
                return false
            }
            
            $('#insertUserModal').modal('hide');
            $('#insertModalState').val('confirm');
            bootbox.confirm("Apakah anda yakin akan menyimpan data ini ?.", function (result) {
                if(result){
                    $.ajax({
                        type: "POST",
                        url: $('#insert_user').attr('action'),
                        data:new FormData($("#insert_user")[0]),
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            $.blockUI({
                                message: '<i class="icon-spinner4 spinner"></i>',
                                overlayCSS: {
                                    backgroundColor: '#fff',
                                    opacity: 0.8,
                                    cursor: 'wait'
                                },
                                css: {
                                    border: 0,
                                    padding: 0,
                                    backgroundColor: 'transparent'
                                }
                            });
                        },
                        complete: function () {
                            $.unblockUI();
                        },
                        success: function () {
                            $('#insertUserModal').modal('hide');
                            $('#insertRoleTable tbody').empty();
                            $('#insertRoleTable tbody').append(
                                $('<tr>').append(
                                    $('<td>').attr('colspan', 2).append(
                                        $('<center>').text('Tidak ada data')
                                    )
                                )
                            );
                            $('#insert_user').trigger("reset");
                            $('#add_roles').val(JSON.stringify([]));
                            $('#insert_select_role').val('').trigger('change');
                            $('#insert_gender').val('').trigger('change');
                            $('#insert_jenis_pegawai').val('').trigger('change');
                            $('#userTable').DataTable().ajax.reload();
                            $("#alert_success").trigger("click", 'Data Berhasil disimpan');
                        },
                        error: function (response) {
                            $.unblockUI();
                            if (response.status == 422) $("#alert_warning").trigger("click",response.responseJSON);
                            $('#insertUserModal').modal();
                        }
                    });
                } else {
                    $('#insertUserModal').modal();
                }
            });
        });
        
        $('#update_user').submit(function (event){
            event.preventDefault();
            var name = $('#update_name').val();
            var email = $('#update_email').val();
            var password = $('#update_password').val();
            var wa = $('#update_wa').val();
            var nip = $('#update_nip').val();
            var nik = $('#update_nik').val();
            var tempat_lahir = $('#update_tempat_lahir').val();
            var tanggal_lahir = $('#update_tanggal_lahir').val();
            var gender = $('#update_gender').val();
            var jenis_pegawai = $('#update_jenis_pegawai').val();
            var finger_id = $('#update_finger_id').val();
            var rolesData = JSON.parse($('#edit_roles').val());
            
            if(!name){
                $("#alert_warning").trigger("click", 'Nama wajib diisi');
                return false;
            }

            if(!email){
                $("#alert_warning").trigger("click", 'Email wajib diisi');
                return false;
            }
            
            if(!validateEmail(email)){
                $("#alert_info").trigger("click", 'Format email tidak valid.');
                return false;
            }

            if(!wa) {
                $('#alert_warning').trigger('click', 'wa wajib diisi!');
                return false;
            }

            if(!nip) {
                $('#alert_warning').trigger('click', 'nip wajib diisi!');
                return false;
            }

            if(!nik) {
                $('#alert_warning').trigger('click', 'nik wajib diisi!');
                return false;
            }

            if(!tempat_lahir) {
                $('#alert_warning').trigger('click', 'tempat lahir wajib diisi!');
                return false;
            }

            if(!tanggal_lahir) {
                $('#alert_warning').trigger('click', 'tanggal lahir wajib diisi!');
                return false;
            }

            if(!gender) {
                $('#alert_warning').trigger('click', 'gender wajib diisi!');
                return false;
            }

            if(!jenis_pegawai) {
                $('#alert_warning').trigger('click', 'jenis pegawai wajib diisi!');
                return false;
            }

            if(!finger_id) {
                $('#alert_warning').trigger('click', 'finger id wajib diisi!');
                return false;
            }

            if(rolesData.length < 1){
                $("#alert_warning").trigger("click", 'role tidak boleh kosong!');
                return false
            }
            
            $('#updateUserModal').modal('hide');
            bootbox.confirm("Apakah anda yakin akan menyimpan data ini ?.", function (result) {
                if(result){
                    $.ajax({
                        type: "POST",
                        url: $('#update_user').attr('action'),
                        data:new FormData($("#update_user")[0]),
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            $.blockUI({
                                message: '<i class="icon-spinner4 spinner"></i>',
                                overlayCSS: {
                                    backgroundColor: '#fff',
                                    opacity: 0.8,
                                    cursor: 'wait'
                                },
                                css: {
                                    border: 0,
                                    padding: 0,
                                    backgroundColor: 'transparent'
                                }
                            });
                        },
                        complete: function () {
                            $.unblockUI();
                        },
                        success: function (response) {
                            $('#updateUserModal').modal('hide');
                            $('#update_user').trigger("reset");
                            $('#userTable').DataTable().ajax.reload();
                            $("#alert_success").trigger("click", 'Data Berhasil disimpan');
                        },
                        error: function (response) {
                            $.unblockUI();
                            if (response.status == 422) $("#alert_warning").trigger("click",response.responseJSON);
                            $('#updateUserModal').modal();
                        }
                    });
                } else {
                    $('#updateUserModal').modal();
                }
            });
        });

        $('#insertAddRoleBtn').on('click', function() {
            var roleSelected = $('#insert_select_role').val();
            var roleSelectedText = $("#insert_select_role option:selected").text();
            var rolesData = JSON.parse($('#add_roles').val());
            
            if(!roleSelected){
                $("#alert_warning").trigger("click", 'Role tidak boleh kosong!');
                return false
            } else {
                if(!(jQuery.inArray(parseInt(roleSelected), rolesData) === -1)) {
                    $("#alert_warning").trigger("click", 'Role sudah dipilih!');
                    return false
                } else {
                    rolesData.push(parseInt(roleSelected));
                    if($('#insertRoleTable tbody').find('center').length > 0) {
                        $('#insertRoleTable tbody').empty();
                    }
                    $('#insertRoleTable tbody').append(
                        $('<tr>').append(
                            $('<td>').text(roleSelectedText)
                        ).append(
                            $('<td>').addClass('rata-kanan').append(
                                $('<button>').attr('type', 'button').attr('data-id', roleSelected).addClass('btn btn-danger btn-delete-insert-role').append(
                                    $('<i>').addClass('icon-cross3')
                                )
                            )
                        )
                    );
                    $('#add_roles').val(JSON.stringify(rolesData));
                }
            }
        });

        $('#updateAddRoleBtn').on('click', function() {
            var roleSelected = $('#update_select_role').val();
            var roleSelectedText = $("#update_select_role option:selected").text();
            var rolesData = JSON.parse($('#edit_roles').val());
            
            if(!roleSelected){
                $("#alert_warning").trigger("click", 'Role tidak boleh kosong!');
                return false
            } else {
                if(!(jQuery.inArray(parseInt(roleSelected), rolesData) === -1)) {
                    $("#alert_warning").trigger("click", 'Role sudah dipilih!');
                    return false
                } else {
                    rolesData.push(parseInt(roleSelected));
                    if($('#updateRoleTable tbody').find('center').length > 0) {
                        $('#updateRoleTable tbody').empty();
                    }
                    $('#updateRoleTable tbody').append(
                        $('<tr>').append(
                            $('<td>').text(roleSelectedText)
                        ).append(
                            $('<td>').addClass('rata-kanan').append(
                                $('<button>').attr('type', 'button').attr('data-id', roleSelected).addClass('btn btn-danger btn-delete-update-role').append(
                                    $('<i>').addClass('icon-cross3')
                                )
                            )
                        )
                    );
                    $('#edit_roles').val(JSON.stringify(rolesData));
                }
            }
        });

        $('#insertRoleTable tbody').on('click', '.btn-delete-insert-role', function() {
            var id = $(this).data('id');
            var rolesData = JSON.parse($('#add_roles').val());
            rolesData.splice($.inArray(id, rolesData),1);
            $('#add_roles').val(JSON.stringify(rolesData));
            $(this).parent().parent().remove();
            if($('#insertRoleTable tbody tr').length == 0) {
                $('#insertRoleTable tbody').append(
                    $('<tr>').append(
                        $('<td>').attr('colspan', 2).append(
                            $('<center>').text('Tidak ada data')
                        )
                    )
                );
            }
        });

        $('#updateRoleTable tbody').on('click', '.btn-delete-update-role', function() {
            var id = $(this).data('id');
            var rolesData = JSON.parse($('#edit_roles').val());
            rolesData.splice($.inArray(id, rolesData),1);
            $('#edit_roles').val(JSON.stringify(rolesData));
            $(this).parent().parent().remove();
            if($('#updateRoleTable tbody tr').length == 0) {
                $('#updateRoleTable tbody').append(
                    $('<tr>').append(
                        $('<td>').attr('colspan', 2).append(
                            $('<center>').text('Tidak ada data')
                        )
                    )
                );
            }
        });

        $('#insert_finger_id').on("cut copy paste",function(e) { e.preventDefault(); });
        $('#insert_nik').on("cut copy paste",function(e) { e.preventDefault(); });
        $('#insert_nip').on("cut copy paste",function(e) { e.preventDefault(); });
        $('#insert_wa').on("cut copy paste",function(e) { e.preventDefault(); });
        $('#update_finger_id').on("cut copy paste",function(e) { e.preventDefault(); });
        $('#update_nik').on("cut copy paste",function(e) { e.preventDefault(); });
        $('#update_nip').on("cut copy paste",function(e) { e.preventDefault(); });
        $('#update_wa').on("cut copy paste",function(e) { e.preventDefault(); });
    });

    function edit(url)
    {
        $.ajax({
            type: "get",
            url: url,
            beforeSend: function () {
                $.blockUI({
                    message: '<i class="icon-spinner4 spinner"></i>',
                    overlayCSS: {
                        backgroundColor: '#fff',
                        opacity: 0.8,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'transparent'
                    }
                });
            },
            success: function () {
                $.unblockUI();

            }
        })
        .done(function (response) {
            $('#update_user').attr('action', response.url_update);
            $('#user_id').val(response.id);
            $('#update_name').val(response.name);
            $('#update_email').val(response.email);
            $('#update_wa').val(response.wa);
            $('#update_nip').val(response.nip);
            $('#update_nik').val(response.nik);
            $('#update_tempat_lahir').val(response.tempat_lahir);
            $('#update_tanggal_lahir').val(response.tanggal_lahir);
            $('#update_finger_id').val(response.finger_id);
            $('#edit_roles').val(JSON.stringify(response.roles_id));
            $('#updateRoleTable tbody').empty();
            if(response.roles.length > 0) {
                jQuery.each(response.roles, function(index, value) {
                    $('#updateRoleTable tbody').append(
                        $('<tr>').append(
                            $('<td>').text(value.display_name)
                        ).append(
                            $('<td>').addClass('rata-kanan').append(
                                $('<button>').attr('type', 'button').attr('data-id', value.id).addClass('btn btn-danger btn-delete-update-role').append(
                                    $('<i>').addClass('icon-cross3')
                                )
                            )
                        )
                    );
                });
            } else {
                $('#updateRoleTable tbody').append(
                    $('<tr>').append(
                        $('<td>').attr('colspan', 2).append(
                            $('<center>').text('Tidak ada data')
                        )
                    )
                );
            }
            $("#update_gender").val(response.gender).trigger('change');
            $("#update_jenis_pegawai").val(response.jenis_pegawai).trigger('change');
            $('#updateUserModal').modal();
        });
    }

    function hapus(url)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "delete",
            url: url,
            beforeSend: function () {
                $.blockUI({
                    message: '<i class="icon-spinner4 spinner"></i>',
                    overlayCSS: {
                        backgroundColor: '#fff',
                        opacity: 0.8,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'transparent'
                    }
                });
            },
            success: function () {
                $.unblockUI();
            },
            error: function () {
                $.unblockUI();
            }
        })
        .done(function () {
            $('#userTable').DataTable().ajax.reload();
            $("#alert_success").trigger("click", 'Data Berhasil hapus');
        });
    }

    function resetPassword(url)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "post",
            url: url,
            beforeSend: function () {
                $.blockUI({
                    message: '<i class="icon-spinner4 spinner"></i>',
                    overlayCSS: {
                        backgroundColor: '#fff',
                        opacity: 0.8,
                        cursor: 'wait'
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'transparent'
                    }
                });
            },
            success: function () {
                $.unblockUI();
            },
            error: function () {
                $.unblockUI();
            }
        })
        .done(function () {
            $('#userTable').DataTable().ajax.reload();
            $("#alert_success").trigger("click", 'Data Berhasil direset');
        });
    }

    function hapusModal(url)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type: "post",
            url: url,
            beforeSend: function () {
                update_mappings = [];
            },
            success: function (response) {
                var permissions = response;
                for (idx in permissions) 
                {
                    var data = permissions[idx];
                    var input = {
                        'id': data.id,
                        'name': data.display_name
                    };
                    update_mappings.push(input);
                }
                
                
            }
        })
        .done(function () {
            $('#roleTable').DataTable().ajax.reload();
            renderUpdate();
        });
    }

    function validateEmail(email)
    {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function isNumberDot(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        if (key.length == 0) return;
            var regex = /^[0-9\b]+$/;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
    <script type="text/javascript">
        $('.number2').keypress(function (event) {
            var $this = $(this);

            if ((event.which != 44 || $this.val().indexOf(',') != -1) &&
                    ((event.which < 48 || event.which > 57) &&
                            (event.which != 0 && event.which != 8))) {
                event.preventDefault();
            }

            var text = $(this).val();
            if ((event.which == 188) && (text.indexOf(',') == -1)) {
                setTimeout(function () {
                    if ($this.val().substring($this.val().indexOf(',')).length > 3) {
                        $this.val($this.val().substring(0, $this.val().indexOf(',') + 3));
                    }
                }, 1);
            }
        });

        $('.number2').bind("paste", function (e) {
            var text = e.originalEvent.clipboardData.getData('Text');
            if ($.isNumeric(text)) {
                if ((text.substring(text.indexOf(',')).length > 3) && (text.indexOf(',') > -1)) {
                    e.preventDefault();
                    $(this).val(text.substring(0, text.indexOf(',') + 3));
                }
            } else {
                e.preventDefault();
            }
        });

        $('.select-search2').select2({
            placeholder: "Select a State",
            minimumInputLength: 3,
            formatInputTooShort: function () {
                return "Enter Minimum 3 Character";
            },
        });
    </script>
                        <div class="footer text-muted">
                            &copy; 2023. <a href="">Jazaak Firdaus Syafaat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
