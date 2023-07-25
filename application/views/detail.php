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

		        <div class="page-container">
            <div class="page-content">
                <div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class=""><a href="<?=base_url();?>" id="home_menu"><i class="icon-home4"></i> <span>Data Detail</span></a></li>                   
                </ul>
            </div>
        </div>
        <!-- /main navigation -->
    </div>
</div>                <div class="content-wrapper">
                    <div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-grid5 position-left"></i> <span class="text-semibold">Data Detail</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line breadcrumb-line-component"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
        <ul class="breadcrumb">
            <li><a href="<?=base_url('');?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Data Detail</li>
        </ul>
    </div>
</div>
<div class="content">
                            <div class="row">
                                    <div class="col-md-5">
                                        <div class="panel">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="card-img-actions d-inline-block mb-3">
                                                                                                                    <img src="http://127.0.0.1:8000/images/male_avatar.png" class="img-fluid rounded-circle mt-10" width="170" height="170" alt="avatar_male">
                                                                                                        </div>

                                                    <h6 class="font-weight-semibold mb-0"><?=$nama;?></h6>
                                                    <span class="d-block text-muted">NIP. <?=$nip;?></span>
                                                    <table class="mt-10 table rata-kiri">
                                                        <tbody>
                                                            <tr>
                                                                <td>Satuan Kerja</td>
                                                                <td>: <?=$satuan_kerja;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Posisi yang dipilih</td>
                                                                <td>: <?=$posisi_yang_dipilih;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Bahasa Pemrograman yang dikuasai</td>
                                                                <td>: <?=$bahasa_pemrograman_yang_dikuasai;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Database yang dikuasai</td>
                                                                <td>: <?=$database_yang_dikuasai;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tools yang dikuasai</td>
                                                                <td>: <?=$tools_yang_dikuasai;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pernah Mengembangkan Mobile Apps</td>
                                                                <td>: <?=$pernah_membuat_mobile_apps;?></td>
                                                            </tr>

                                                            <?php if(!is_null($attr)) { ?>
                                                                <?php foreach ($attr as $dt2) { ?>
                                                                    <tr>
                                                                        <td><?=$dt2['jenis_attr']; ?></td>
                                                                        <td>: <?=$dt2['value']; ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
