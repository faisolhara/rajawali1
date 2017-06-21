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
							foreach($data as $row ) {
								if($row->sematkan=="ya"){
						
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
							'title' => $row->judul,
							'description' => substr($row->isi, 0, 200).".... "

							);

						include ('assets/includes/blog_items/blog-item.php');
						break;
						}}

						?>	

					</div>


				</div>
				<div class="row related-events">
					
					<div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll">
						<h3>Berita Lainnya</h3>
					</div>
					
					<?php
					$no=1;
					foreach($data as $row ) {
						if($no==4){
							break;
						}else if(($row->sematkan=="ya")){
							$no--;
						}else{
						?>
					<div class="col-lg-4 col-md-4 col-sm-4 animate-onscroll">
						
						<!-- Event Item -->
						<div class="event-item">
							
							<div class="event-image">
								<img src="<?php echo base_url()."assets/".$row->foto;?>" alt="">
							</div>
							
							<div class="event-info">

								<div class="date">
									<span>
										<span class="day"><?php echo $row->hari;?></span>
										<span class="month"><?php echo $row->bulan;?></span>
									</span>
								</div>
								
								<div class="event-content">
									<h6><a href="beritaSingle/<?php echo $row->id;?>"><?php echo $row->judul; ?></a></h6>
								</div>

							</div>

						</div>
						<!-- /Event Item -->	
					</div>
					<?php $no++;}} ?>
					
					
				</div>
				<a class="button read-more-button big button-arrow" href="<?php echo site_url("C_Main/beritaMore"); ?>">Lebih Banyak Berita </a>
					
				<div class="animate-onscroll">
				<br>

				</div>

				

						


					</div>



					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">

						<?php
						/* Upcoming Events */
						include('assets/includes/sidebar_items/berita.php');
						include('assets/includes/sidebar_items/upcoming-events.php');
						//include('assets/includes/sidebar_items/calendar.php');
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