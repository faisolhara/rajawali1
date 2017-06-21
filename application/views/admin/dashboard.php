<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
    <?php include ('assetsadmin/head.php');?>

</head>
<body class="">
    <header>
        <?php include ('assetsadmin/header.php');?>
    </header>

    <div class="page-wrapper">

       <?php include ('assetsadmin/sidebar.php');?>
       <?php include ('assetsadmin/statistika.php');?>     

       <div class="page-content">
        <div class="page-subheading page-subheading-md">
            <ol class="breadcrumb">
                <li class="active"><a href="javascript:;">Dashboard</a></li>
            </ol>
        </div>

        <div class="container-fluid-md">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-metric panel-metric-sm">
                        <div class="panel-body panel-body-primary">
                            <div class="metric-content metric-icon">
                                <div class="value">
                                    <?php echo $pengunjung; ?>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-trophy"></i>
                                </div>
                                <header>
                                    <h3 class="thin">Pengunjung Hari Ini</h3>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-metric panel-metric-sm">
                        <div class="panel-body panel-body-success">
                           <div class="metric-content metric-icon">
                            <div class="value">
                                <?php echo $totalpengunjung; ?>                                
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <header>
                                <h3 class="thin">Total Pengunjung</h3>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="panel panel-metric panel-metric-sm">
                    <div class="panel-body panel-body-inverse">
                        <div class="metric-content metric-icon">
                            <div class="value">
                                <?php echo $pengunjungonline; ?>                                                                
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <header>
                                <h3 class="thin">Pengunjung Online</h3>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-metric panel-metric-sm">
                        <div class="panel-body panel-body-warning">
                            <div class="metric-content metric-icon">
                                <div align ="center"class="value center">
                                    <?php echo $totalBerita; ?>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                                <header>
                                    <h3 class="thin">Total Berita yang di Upload</h3>
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="panel panel-metric panel-metric-sm">
                        <div class="panel-body panel-body-danger">
                           <div class="metric-content metric-icon">
                            <div class="value">
                                <?php echo $totalKegiatan; ?>                                
                            </div>
                            <div class="icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <header>
                                <h3 class="thin">Total Kegiatan yang diupload</h3>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="panel panel-metric panel-metric-sm">
                    <div class="panel-body panel-body-info">
                        <div class="metric-content metric-icon">
                            <div class="value">
                                <?php echo $totalfoto; ?>                                                                
                            </div>
                            <div class="icon">
                                <i class="fa fa-photo"></i>
                            </div>
                            <header>
                                <h3 class="thin">Total Foto Galeri</h3>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

</div>

<?php include('assetsadmin/copyright.php') ?>
<?php include('assetsadmin/footer.php') ?>



</body>
</html>
