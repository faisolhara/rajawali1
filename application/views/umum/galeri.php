<?php

/* Global Variables */

$candidate['page-title'] = 'Galeri'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Galeri'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>



<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Galeri</h1>
		<p class="breadcrumb"><a href="main-v1.php">Home</a> / Galeri</p>

	</section>
	<!-- Page Heading -->



	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="row section-row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="media-items row">
					<?php 
					$no = $offset;
					foreach ($data as $row) {?>
					<div class="col-lg-4 col-md-4 col-sm-6">		
						<?php
						$media = array(
							'thumb' => $row->link,
							'format' => 'image',
							'link' => $row->link,
							'jackbox-link' => $row->link,
							'type' => 'gallery'
							);
						/* Media item */
						include('assets/includes/media/media-item.php');	
						?>
					</div>
					 
				<?php } ?>
				</div>

				<div class="animate-onscroll">

					<div class="divider"></div>


					<div class="panel-footer" style="height:60px;">
						<?php echo $halaman ?> 
						<!--Memanggil variable pagination-->
					</div>
				
				</div>
			</div>
			

		</div>

</section>
<!-- /Section -->

</section>

<?php

/* <footer> </footer> */
include ('assets/includes/footer.php');

/* JavaScript */
include ('assets/includes/foot.php');

?>