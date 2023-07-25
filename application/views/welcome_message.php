
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
                        
                        <div class="footer text-muted">
                            &copy; 2023. <a href="">Jazaak Firdaus Syafaat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
