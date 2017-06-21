<?php

/* Global Variables */

$candidate['page-title'] = 'Kontak'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Kontak'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

			
			
		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>Kontak</h1>
				<p class="breadcrumb"><a href="main-v1.php">Home</a> / Kontak</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row section-row">
				
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
						<h3 class="animate-onscroll no-margin-top">Peta Lokasi</h3>
						
						<div class="contact-map animate-onscroll">
							<iframe src="https://www.google.com/maps/d/embed?mid=zr7T_sjtoODg.kmtPDgeMVk-I" width="100%" height="480"></iframe>
						</div>
						
						<div class="row">
							
							<div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">
								
								<h6>PT. PG. Rajawali I</h6>
								<p>Alamat : Jl. Undaan Kulon No. 57-59 Surabaya 60274<br>
								Telepon : (031) 5343551-3 , 5317028-29br <br>
								Fax. : (031) 5316359 </p>
								
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">
								
								<h6>PG Krebet Baru</h6>
								<p>Alamat : Jl. Bululawang No. 10 Malang<br>
								Telepon : (0341) 833185 833176 <br>
								Fax. : (0341) 833179</p>
								
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-6 animate-onscroll">
								
								<h6>PG Rejo Agung Baru</h6>
								<p>Alamat : Jl. Yos Sudarso No. 23 Madiun - 63123 <br>
								Telepon : (0351) 462525-462526 <br>
								Fax. : (0351) 463462</p>
								
								
							</div>
							
						</div>
						
						
						
						<h3>Kami siap melayani anda</h3>
						
						<p>Kami percaya kritik dan saran pengguna layanan adalah bagian dari pemicu perkembangan <strong>PT PG RNI 1</strong> ke arah yang lebih baik. Sampaikan <strong>pertanyaan, kritik, dan saran</strong> kepada <strong>PT PG RNI 1</strong> melalui form di bawah ini. <br>
						
						<form id="contact-form" action="<?php echo base_url();?>C_Main/kirimPesan" method="POST">
							
							<div class="inline-inputs">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<label>Nama <span class="text-danger">*</span></label>
									<input type="text" name="nama" required> 	
								</div>
								
								<div class="col-lg-6 col-md-6 col-sm-12">
									<label>Alamat Email <span class="text-danger">*</span></label><br>
									<input type="text" name="email" required>								
								</div>
					
								<div class="col-lg-6 col-md-6 col-sm-12">
									<label>Kota/Kabupaten</label>
									<input type="text" name="kota"> 		
								</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12">
									<label>Komentar/Pesan <span class="text-danger">*</span></label>
									<textarea rows="5" name="pesan" required></textarea>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12">
									<br>
									(<span class="text-danger">*</span>) wajib diisi.</p><br>
									<label>Demi keamanan layanan dan pengguna, tuliskan captcha berikut ini!</label><br/>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-12">
									<?=$cap_img?>
									<br><br>
									<input type="text" name="captcha" value=""/>
								</div>
							</div>
							<input type="submit" value="submit">
						</form>
											
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