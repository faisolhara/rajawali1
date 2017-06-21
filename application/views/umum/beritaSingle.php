<?php

/* Global Variables */

$candidate['page-title'] = 'Berita Single'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Berita'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>

<section id="content">	
	<?php
	if($data==NULL){ ?>
	<section class="section page-heading animate-onscroll">
		<h1 align="center">MOHON MAAF</h1>
		<h1 align="center">KONTEN TELAH DI HAPUS</h1>
		<ul class="slides">

			<li align="center"><img  width="300px" src="<?php echo base_url()."assets/img/kontenUsang.png";?>" alt=""></li>												
		</ul>
	</section>
	<!-- Pagination -->
	<div class="row animate-onscroll">
		<?php if(($page['nomor'])!=1){ ?>
		<div class="col-lg-6 col-md-6 col-sm-6 button-pagination align-left">
			<a href="<?php echo ($page['nomor'])-1;?>" class="button big previous">Prev post</a>
		</div>
		<?php } ?>
		<?php foreach ($last as $row2) {
			if(($page['nomor'])!=($row2->last)){ ?>
			<div class="col-lg-6 col-md-6 col-sm-6 button-pagination align-right">
				<a href="<?php echo ($page['nomor'])+1;?>" class="button big next">Next post</a>
			</div>
			<?php }} ?>

		</div>
		<!-- /Pagination -->
		

		<?php
	}else{
		foreach($data as $row ) { ?>
		<!-- Page Heading -->
		<section class="section page-heading animate-onscroll">

			<h1><?php echo $row->judul;?></h1>

			<p class="breadcrumb"><a href="">Home</a>/ Berita</p>

		</section>
		<!-- Page Heading -->


		<?php }} ?>


		<!-- Section -->
		<section class="section full-width-bg gray-bg">

			<div class="row section-row">

				<div class="col-lg-9 col-md-9 col-sm-8">
					<?php foreach($data as $row ) { ?>
					<!-- Single Blog Post -->
					<div class="blog-post-single">

						<!-- Portfolio Slideshow -->
						<div class="portfolio-slideshow flexslider animate-onscroll">

							<ul class="slides">

								<li><img src="<?php echo base_url()."assets/".$row->foto;?>" alt=""></li>												
							</ul>

						</div>
						<!-- /Portfolio Slideshow -->

						<div class="post-meta animate-onscroll">
							<span>by <a href="#">admin</a></span>
							<span><?php echo $row->tanggal; ?></span>
						</div>

						<div class="post-content">
							<p class="animate-onscroll"><?php echo $row->isi; ?></p>	
						</div>


						<!-- Post Meta Track -->
						<div class="post-meta-track animate-onscroll">

							<table class="project-details">

								<tr>
									<td class="share-media">
										<ul class="social-share">	
											<li>Share this:</li>
											<li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>
											<li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>
											<li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>
											<li class="pinterest"><a href="#" class="tooltip-ontop" title="Pinterest"><i class="icons icon-pinterest-3"></i></a></li>
											<li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>
										</ul>
									</td>
								</tr>

							</table>

						</div>
						<!-- /Post Meta Track -->



						<!-- Pagination -->
						<div class="row animate-onscroll">
							<?php if(($row->id)!=1){ ?>
							<div class="col-lg-6 col-md-6 col-sm-6 button-pagination align-left">
								<a href="<?php echo ($row->id)-1;?>" class="button big previous">Prev post</a>
							</div>
							<?php } ?>
							<?php foreach ($last as $row2) {
								if(($row->id)!=($row2->last)){ ?>
								<div class="col-lg-6 col-md-6 col-sm-6 button-pagination align-right">
									<a href="<?php echo ($row->id)+1;?>" class="button big next">Next post</a>
								</div>
								<?php }} ?>

							</div>
							<!-- /Pagination -->



						</div>	
						<!-- /Single Blog Post -->
						<?php } ?>	


					</div>

					<?php if($data!=NULL){ ?>

					<!-- Sidebar -->

					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">

						<?php
						include('assets/includes/sidebar_items/popular-news.php');
						include('assets/includes/sidebar_items/berita.php');
						/* Upcoming Events */
						include('assets/includes/sidebar_items/upcoming-events.php');
					}
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