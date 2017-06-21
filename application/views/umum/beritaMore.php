<?php

/* Global Variables */

$candidate['page-title'] = 'Berita'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Berita'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>

<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Berita Terkini Seputar PG Rajawali 1 </h1>
		<p class="breadcrumb"><a href="">Home</a> / Berita</p>

	</section>
	<!-- Page Heading -->



	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row section-row">

			<div class="col-lg-9 col-md-9 col-sm-8">

				<div class="row">

					<div class="col-lg-12 col-md-12 col-sm-12">



						<?php

							$no = $offset;
							foreach($data as $row ) {
								if($no!=1231){
						
						/* Blog Post */
						$link= base_url()."assets/".$row->foto;
						$blog_item = array(

							'thumbnail' => $row->foto,
							'img' => $row->foto,
							'link' => $row->foto,
							'day' => $row->hari,
							'month' => $row->bulan,
							'format' => 'standard',
							'categories' => '',
							'comments' => '25',
							'title' => $row->judul,
							'description' => substr($row->isi, 0, 100).".... "

							);

						include ('assets/includes/blog_items/blog-item-v2.php');
								
					
						}}

						?>	

					</div>


				</div>
				
				<div class="animate-onscroll">
				<br>
				<div class="panel-footer" style="height:40px;">
							<?php echo $halaman ?> 
							<!--Memanggil variable pagination-->
						</div>
				</div>

				

						


					</div>



					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">

						<?php
						include('assets/includes/sidebar_items/berita.php');
						include('assets/includes/sidebar_items/upcoming-events.php');
						include('assets/includes/sidebar_items/calendar.php');
						include('assets/includes/sidebar_items/cuaca.php');

						?>


					</div>
					<!-- /Sidebar -->




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