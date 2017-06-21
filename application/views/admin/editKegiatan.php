<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Edit Kegiatan </title>
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
    <script type='text/javascript'>  
        $(document).ready(function(){  
            $("#date").timepicker({timeFormat:"hh:mm:ss.000000"});  
        });  
    </script> 
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
                    <li><a href="">Kegiatan</a></li>
                    <li class="active"><a href="javascript:;">List Kegiatan</a></li>
                </ol>
            </div>
            <div class="page-heading page-heading-md">
                <!-- <h2>List Berita</h2> -->
            </div>

            <div class="container-fluid-md">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">List Berita</h2>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                            <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                            <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php foreach ($data as $row) { ?>
                        <form  method="POST" action="<?php echo site_url('C_Admin/editKegiatan/'.$row->id); ?>">
                            <div class="form-group" align="left">
                                <label>ID :</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <input type="number" name="id" id="id" value="<?php echo $row->id; ?>"class="form-control"  readonly="readonly">
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group" align="left">
                                <label>Event :</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-header"></i>
                                    </div>
                                    <textarea name="event" id="event" class="form-control" required="required"><?php echo $row->event; ?></textarea>

                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group" align="left">
                                <label>Deskripsi :</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-file-text"></i>
                                    </div>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required="required"><?php echo $row->deskripsi; ?></textarea>

                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group" align="left">
                                <label>Tanggal Mulai :</label>
                                <div class="input-group">
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        <input type="text" name="tanggalMulai" class="form-control" value="<?php echo $row->tanggalMulai; ?>"data-rel="datepicker">
                                    </div>
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group" align="left">
                                <label>Jam / Pukul:</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                     <i class=" btn btn-primary fa fa-clock-o"></i>
                                 </span>
                                 <input type="text" name="jam" class="form-control" value="<?php echo $row->jam; ?>" data-rel="timepicker" id="inputTimepicker24" data-show-meridian="false" data-show-seconds="true" >
                             </div>
                         </div>
                         <div class="form-group" align="left">
                            <label>Tanggal Selesai :</label>
                            <div class="input-group">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    <input type="text" name="tanggalSelesai" class="form-control" value="<?php echo $row->tanggalSelesai; ?>" data-rel="datepicker">
                                </div>
                            </div><!-- /.input group -->
                        </div>

                        <div class="form-group" align="right">
                            <button  class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>


        </div>

    </div>
</div>
<?php include('assetsadmin/copyright.php') ?>

<script type='text/javascript'>  
    $(document).ready(function(){  
        $("#date").datepicker({dateFormat:"yyyy-mm-yy"});  
    });  
</script> 
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
