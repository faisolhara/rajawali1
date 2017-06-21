<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tambah Galeri </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assetsadmin/img/favicon.png">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/dist/css/veneto-admin.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/demo/css/demo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/dist/assets/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/dist/css/plugins/jquery-select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assetsadmin/dist/css/plugins/jquery-dataTables.min.css">
        <!--[if lt IE 9]>
        <script src="dist/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="dist/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="">
        <header>
            <?php include ('assetsadmin/header.php');?>
        </header>
        <div class="page-wrapper">

         <?php include ('assetsadmin/sidebar.php');?>

         <div class="page-content">
            <div class="page-subheading page-subheading-md">
                <ol class="breadcrumb">
                    <li><a href="javascript:;">Dashboard</a></li>
                    <li><a href="javascript:;">Galeri</a></li>
                    <li class="active"><a href="javascript:;">Tambah Galeri</a></li>
                </ol>
            </div>
            <div class="page-heading page-heading-md">
                <h2>Tambah Galeri</h2>
            </div>

            <div class="container-fluid-md">
                <form action="<?php echo site_url('C_Admin/uploadGaleri'); ?>" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Tambahkan Foto Galeri Terbaru</h4>

                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                                <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="control-label col-sm-3"><strong>Caption</strong></label>

                                <div class="controls col-sm-6">
                                    <textarea class="form-control" name="caption" rows="2" placeholder="Masukkan Keterangan Foto ..." required></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-sm-3"><strong>Foto Galeri (16:9) Maksimal 2MB</strong></label>
                                <div class="controls col-sm-6">
                                    <input name="fotoGaleri" type="file" accept="image/*" required />
                                </div>
                            </div>
                            <div class="form-group form-group-lg" >
                                <div class="controls col-sm-12" align="center">
                                    <button class="btn btn-primary" type="submit">Tambahkan</button>                
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    
<?php include('assetsadmin/copyright.php') ?>
    
    <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/bs3/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-navgoco/jquery.navgoco.js"></script>
    <script src="<?php echo base_url(); ?>assetsadmin/dist/js/main.js"></script>

        <!--[if lt IE 9]>
        <script src="dist/assets/plugins/flot/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/demo/js/demo.js"></script>

        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/demo/js/tables-data-tables.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/demo/js/tables-data-tables.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/libs/jquery-ui/minified/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-selectboxit/javascripts/jquery.selectBoxIt.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-chosen/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/demo/js/forms-advanced-components.js"></script>

        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-datatables/js/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/demo/js/tables-data-tables.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/libs/jquery-ui/minified/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-select2/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-selectboxit/javascripts/jquery.selectBoxIt.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/jquery-chosen/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/dist/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assetsadmin/demo/js/forms-advanced-components.js"></script>






    </body>
    </html>
