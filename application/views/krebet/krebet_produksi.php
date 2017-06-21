<?php

/* Global Variables */

$candidate['page-title'] = 'Unit Usaha Krebet'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Unit Usaha'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header_krebet.php');

?>
<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>PG KREBET BARU MALANG</h1>
				<p class="breadcrumb"><a href="">Home</a> / PG Krebet Baru / Data Produksi</p>

			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">

				<div class="row section-row">

					<!-- Sidebar -->
					<div class="col-lg-4 col-md-3 col-sm-4 sidebar">
						
						<?php
						
						/* Banners */
						include('assets/includes/sidebar_items/banners.php'); 

						?>
						
					</div>
					<!-- /Sidebar -->
				
					<div class="col-lg-8 col-md-9 col-sm-9">
						<h3 class="animate-onscroll no-margin-top">Data Produksi</h3>

						<div class="row">

							<div class="box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped align-center">
                                    <thead>
                                        <tr>
                                            <th>Tahun</th>
                                            <th>Tebu Digiling (Ton)</th>
                                            <th>Luas Areal (Ha)</th>
                                            <th>Produksi Gula (Ton)</th>
                                            <th>Kapasitas Giling (TCD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php foreach($produksi as $i) { ?>
                                        <tr>
                                            <td><?php echo "$i->tahun" ?></td>
                                            <td><?php echo "$i->tebu" ?></td>
                                            <td><?php echo "$i->luas_areal" ?></td>
                                            <td><?php echo "$i->gula" ?></td>
                                            <td><?php echo "$i->kap_giling" ?></td>
                                        </tr>
                                        
                                        <?php } ?>
                                   </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Tahun</th>
                                            <th>Tebu Digiling (Ton)</th>
                                            <th>Luas Areal (Ha)</th>
                                            <th>Produksi Gula (Ton)</th>
                                            <th>Kapasitas Giling (TCD)</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.box-body -->	

						</div>
						
						<br><br>
						
						
					</div>

					
					
				</div>
				
			</section>
			<!-- /Section -->
		
		</section>
	<?php

	/* <footer> </footer> */
	include ('assets/includes/footer_krebet.php');

	/* JavaScript */
	include ('assets/includes/foot.php');

	?>