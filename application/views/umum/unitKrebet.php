<?php

/* Global Variables */

$candidate['page-title'] = 'Unit Usaha Krebet'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Unit Usaha'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>PG KREBET BARU MALANG</h1>
				<p class="breadcrumb"><a href="">Home</a> / Unit Usaha Krebet</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row section-row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
							<div class="col-lg-12 col-md-12 col-sm-12">
							
								<h3 class="animate-onscroll no-margin-top">Company Profile</h3>
								
								<img class="align-left animate-onscroll" src="<?php echo base_url();?>assets/img/unit/krebet1.jpg" alt="">
								
								<p class="animate-onscroll" align="justify">PG. Krebet  didirikan oleh Pemerintah Hindia Belanda pada Tahun 1906 dengan nama NV. Handemijk Kian Gwan, kemudian dimiliki oleh pengusaha Cina Oie Tiong Ham Concern. Pada tahun 1947 masa perang (Clash I) pabrik mengalami kerusakan yang parah, sehingga tidak bisa beroperasi lagi.
</p>
								
								<p class="animate-onscroll" align="justify">Atas desakan IMA – PETERMAS ( Indonesia Maskapai Andal Petani Tebu Rakyat Malang Selatan ), maka diadakan perbaikan oleh Oei Tiong Ham Concern yang bekerja sama dengan Bank Industri Negara. Sehingga pada tahun 1957 PG. Krebet dapat beroperasi kembali dan memproduksi gula dengan kualitas High Sugar (HS) / Superior High Sugar (SHS), bahkan pada tahun itu sudah dapat mengekspor gula ke mancanegara.
</p>
								
								<img class="align-right animate-onscroll" src="<?php echo base_url();?>assets/img/unit/krebet2.jpg" alt="">
								
								<p class="animate-onscroll" align="justify">Pada 20 Juli 1963 penguasaan dan pengelolaan atas harta kekayaan ex. Oie Tiong Han Concern diserahterimakan dari Menteri / Jaksa Agung RI kepada Menteri Urusan Pendapatan, Pembiayaan dan Pengawasan (P3) sekarang Departemen Keuangan RI. Pada tahun 1964 dibentuk PT. Perusahaan Perkembangan Ekonomi Nasional (PPEN) Rajawali Nusantara Indonesia disingkat PT. Rajawali Nusantara Indonesia untuk melanjutkan aktivitas usaha ex. Oie Tiong Ham Concern.
</p>
								
								<p class="animate-onscroll"></p>
								
								<br class="clearfix">
								<blockquote class="align-center animate-onscroll" style="width:70%" align="justify">"PG Krebet Baru II memiliki prestasi nasional yaitu menjadi pabrik gula dengan perolehan rendemen tertinggi pada tahun 2013."</blockquote>
								<br><br><br><br>
							</div>
						

						<div class="row">
						
							<div class="col-lg-12 col-md-12 col-sm-12">
						
								<h3 class="animate-onscroll no-margin-top">Video PG Krebet Baru Malang</h3>
								
								<iframe class="animate-onscroll youtube-video" width="920" height="515" src="//www.youtube.com/embed/5qja4R22jlk?rel=0&amp;wmode=transparent" allowfullscreen></iframe>
								
								<p class="animate-onscroll" align="justify">Video tersebut merupakan proses pembongkaran tebu pada truck yang telah ditimbang pada stasiun timbang. Tebu akan diproses ke tahap selanjutnya ke stasiun giling.</p>
								
								
								
							</div>
							
						</div>
						
					</div>
					
					
					
					<!-- Sidebar -->

					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">

						<?php
						include('assets/includes/sidebar_items/popular-news.php');
						
						/* Upcoming Events */
						include('assets/includes/sidebar_items/upcoming-events.php');
						include('assets/includes/sidebar_items/berita.php');
						

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