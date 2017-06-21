<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>List Galeri </title>
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
                    <li class="active"><a href="javascript:;">Lihat Galeri</a></li>
                </ol>
            </div>
            <div class="page-heading page-heading-md">
                <!-- <h2>List Galeri</h2> -->
            </div>

            <div class="container-fluid-md">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">List Galeri</h2>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                            <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                            <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="20%" align="center">Foto</th>
                                    <th width="20%">Link</th>
                                    <th width="20">Quote</th>
                                    <th width="40%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $row) {?>
                                <tr class="odd gradeX">
                                    <td class="center"><img src="<?php echo site_url("assets")."/".$row->link; ?>" height="100px"></td>        
                                    <td><?php echo $row->link; ?></td>
                                    <td><?php echo $row->quote; ?> </td>
                                    <td class="center">
                                        <div class="the-icon-hover col-lg-3 col-md-4 col-sm-6"><a data-toggle="modal" data-target="#modal_edit<?php echo $row->id; ?>"><i class="fa fa-edit"></i>&nbsp <br>Edit </a></div>
                                        <div class="the-icon-hover col-lg-3 col-md-4 col-sm-6"><a href="hapusGaleri/<?php echo "$row->id"; ?>" onclick="return confirm('Anda yakin ingin menghapus Foto ini?')"><i class="fa fa-eraser"></i>&nbsp <br>Hapus </a></div>
                                    </td>
                                </tr>
                                <?php } ?>
                                
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="20%" align="center">Foto</th>
                                    <th width="20%">Link</th>
                                    <th width="20">Quoote</th>
                                    <th width="40%">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>


            </div>

        </div>
    </div>
<?php include('assetsadmin/copyright.php') ?>
<?php foreach ($data as $row2) {?>
    <div class="modal" id="modal_edit<?php echo $row2->id; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">                    
                <div class="modal-body">
                    <h3>Edit Berita</h3>
                </div>
                <div class="modal-footer">
                    <div class="box box-danger">
                        <div class="box-body">
                            
                            <form  method="POST" action="<?php echo site_url('C_Admin/editGaleri/'.$row2->id); ?>">
                                <div class="form-group" align="left">
                                    <label>ID :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <input type="number" name="id" id="id" value="<?php echo $row2->id; ?>"class="form-control"  readonly="readonly">
                                    </div><!-- /.input group -->
                                </div>
                                <div class="form-group" align="left">
                                    <label>Qoute / Judul :</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-header"></i>
                                        </div>
                                        <input name="quote" id="quote" class="form-control" value="<?php echo $row2->quote; ?>" required="required"/>
                                        
                                    </div><!-- /.input group -->
                                </div>
                                <div class="form-group" align="right">
                                    <button  class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div>              
            </div>
        </div>
    </div>
    <?php } ?>
    
    
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


    </body>
    </html>
