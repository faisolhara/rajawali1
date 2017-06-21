<?php

/* Global Variables */

$candidate['page-title'] = 'Kegiatan'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Kegiatan'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>

<section id="content">	

	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">

		<h1>Kegiatan Seputar PG Rajawali 1</h1>
		<p class="breadcrumb"><a href="">Home</a> / Kegiatan</p>

	</section>
	<!-- Page Heading -->



	<!-- Section -->
	<section class="section full-width-bg gray-bg">

		<div class="row section-row">

			<div class="col-lg-9 col-md-9 col-sm-8">

				
				<div class="row related-events">					
					<div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll">
						<!-- <h3>Kegiatan Lainnya</h3> -->
					</div>
					
					<?php
					$no = $offset;
					foreach($data as $row ) {?>
						<div  class="col-lg-6 col-md-6 col-sm-6 animate-onscroll">

							<!-- Event Item -->
							<div class="event-item" style="min-height:450px;">

								<div class="event-image">
									<img src="<?php echo base_url('')."assets/".$row->foto;?>" alt="">
								</div>

								<div class="event-info">

									<div class="date">
										<span>
											<span class="day"><?php echo $row->hariMulai;?></span>
											<span class="month"><?php echo $row->bulanMulai;?></span>
										</span>
									</div>

									<div class="event-content">
										<h6><?php echo $row->event; ?></h6>
										<ul class="event-meta">
											<li><i class="icons icon-clock"></i> <?php echo $row->hours." : ".$row->menit." WIB";  ?></li>
											<li><i class="icons icon-location"></i> <?php echo $row->tempat; ?></li>
											
												<i class="icons icon-description"></i> 
												<!-- Accordions -->
												<ul class="accordions toggles">
													<li class="accordion">

														<div class="accordion-header">
															<div class="accordion-icon"></div>
															<h8>Deskripsi</h8>

														</div>

														<div class="accordion-content">
															Waktu		   : <?php echo $row->hours.":".$row->menit." WIB"; ?><br>
															Tanggal Mulai  : <?php echo $row->tanggalMulai; ?><br>
															Tanggal Selesai: <?php echo $row->tanggalSelesai; ?><br>
															Tempat         : <?php echo $row->tempat; ?><br>

															<p><?php echo $row->deskripsi; ?></p></div>

														</li>

													</ul>
													<!-- /Accordions -->
												
											</ul>
										</div>

									</div>

								</div>
								<!-- /Event Item -->	
							</div>
							<?php } ?>

						</div>
						<div class="animate-onscroll">
							<br>
							<div class="divider"></div>
							<div class="panel-footer" style="height:40px;">
								<?php echo $halaman ?> 
								<!--Memanggil variable pagination-->
							</div>

						</div>

		






					</div>



					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">

						<?php
						include('assets/includes/sidebar_items/calendar.php');
						include('assets/includes/sidebar_items/popular-news.php');
						include('assets/includes/sidebar_items/berita.php');


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