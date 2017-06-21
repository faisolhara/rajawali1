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
				<p class="breadcrumb"><a href="">Home</a> / PG Krebet / Data Cetak Nota</p>

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
				
					<div class="col-lg-8 col-md-8 col-sm-8">
						<h3 class="animate-onscroll no-margin-top">Data Cetak Nota</h3>

						<div class="row">

							<?php foreach($file as $i) { 
							 ?>	
							
							<div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll">
								
								<div class="issue-block">
									
									<div class="issue-content">

										<img width="60px" src="<?php echo base_url();?>/assets/img/file-icon.png"><br><br>

										<h4><?php echo "$i->nama_file"; ?>  </h4>
										 
										<a class="button" target="_blank" href="<?php echo base_url().$i->link;?>">Download</a>
									
									</div>
									
								</div>
								
							</div>

							<?php } ?>	

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