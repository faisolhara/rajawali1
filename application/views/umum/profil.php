<?php

/* Global Variables */

$candidate['page-title'] = 'Profil'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Profil'; // Current Menu Item



/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');


?>

			
			
		<section id="content">	
			
			<!-- Page Heading -->
			<section class="section page-heading animate-onscroll">
				
				<h1>Profil</h1>
				<p class="breadcrumb"><a href="main-v1.php">Home</a> / Profil</p>
				
			</section>
			<!-- Page Heading -->
			

			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row section-row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">

						<h3 class="animate-onscroll no-margin-top">Biografi PG Rajawali 1</h3>
						
						
						<div class="row">
						
							<div class="col-lg-12 col-md-12 col-sm-12">
						
								<img class="animate-onscroll" src="<?php echo base_url();?>assets/img/slide/rni1.jpg">

								<p class="animate-onscroll" align="justify">PT. PG. Rajawali I pada awalnya merupakan penggabungan Pabrik Gula Krebet Baru dan Pabrik Gula Rejo Agung Baru, yang merupakan anak perusahaan PT Rajawali Nusantara Indonesia. Penggabungan kedua PG tersebut dilakukan di tahun 1995. Dalam menjalankan usahanya, PT PG Rajawali I sebagai kantor pusat berkedudukan di jalan Undaan Kulon No.57-59 Surabaya - Jawa Timur, sedangkan unit-unit dan anak perusahaan tersebar di wilayah Jawa Timur.</p>
							
								<blockquote class="align-left animate-onscroll" style="width:45%">"Hasil panen yang baik bukanlah yang bobotnya banyak, tetapi yang nilai rendemennya tinggi"</blockquote>

								<p class="animate-onscroll" align="justify">Sebagai perusahaan yang dinamis senantiasa memproyeksikan adanya pertumbuhan. Agar dapat mencapai angka pertumbuhan yang memadai produk-produk yang dihasilkan harus memiliki daya saing. Untuk itu semua unit usaha telah melakukan berbagai upaya meningkatkan efisiensi dan produktifitas dengan tetap mengutamakan keunggulan kualitas produk yang dihasilkan serta peningkatan kualitas pelayanan menuju kepada pelayanan yang menggembirakan pelanggan.</p> 

								<p class="animate-onscroll"align="justify" >Upaya pemberdayaan unit-unit di lingkungan PT PG Rajawali I diwujudkan dalam program jangka pendek dan jangka panjang (5 tahun), yang meliputi : </p>
								
								<p >
								<ul class="animate-onscroll" >
									<li >Pemantapan Core business </li>
									<li>Optimalisasi pemanfaatan asset dan pemanfaatan kapasitas idle </li>
									<li>Peningkatan produktivitas dan efisiensi </li>
									<li>Peningkatan kualitas produk </li>
									<li>Implementasi/Inovasi teknologi baru</li>
								</ul></p>


							</div>
							
						</div>
						
						
						<div class="row section-row">
							
							<div class="col-lg-6 col-md-6 col-sm-12 animate-onscroll" id="visimisi">
								
								<h3 class="no-margin-top">Visi dan Misi</h3>
								
									<!-- Accordions -->
									<ul class="accordions toggles">

										<!-- Accordion -->
										<li class="accordion">

											<div class="accordion-header">
												<div class="accordion-icon"></div>
												<h6>Visi</h6>

											</div>

											<div class="accordion-content">
												<p>Menjadi industri berbasis tebu yang unggul dalam persaingan global dan berwawasan lingkungan berlandaskan tata kelola perusahaan yang baik.</p>
											</div>

										</li>
										<!-- /Accordion -->

										<!-- Accordion -->
										<li class="accordion">

											<div class="accordion-header">
												<div class="accordion-icon"></div>
												<h6>Misi</h6>

											</div>

											<div class="accordion-content">
												<ul><li><p>Meningkatkan kinerja terbaik melalui pencapaian produktivitas dan efektivitas, berorientasi kualitas produk, pelayanan pelanggan serta menjadi perusahaan yang memiliki komitmen tinggi terhadap kelestarian lingkungan.</p></li> 
													<li><p>Melakukan langkah-langkah inovasi, diversifikasi dan ekspansi untuk tumbuh berkembang berkelanjutan.</p></li>
												</ul>
											</div>

										</li>
										<!-- /Accordion -->


									</ul>
										<!-- /Accordions -->
										
							</div>
							
							<div class="col-lg-6 col-md-6 col-sm-12 animate-onscroll" id="">
								
								<h3 class="no-margin-top">Susunan Direksi dan Komisaris</h3>
								
								<div class="box-body table-responsive">
		                            <table id="example1" class="table table-bordered table-striped align-left ">
		                                <tr>
											<th>Komisaris Utama</th>
											<td>-</td>
										</tr>
										<tr>
											<th>Komisaris</th>
											<td>Ruspen Saragih</td>
										</tr>
										<tr>
											<th>Komisaris</th>
											<td>Tjatur Dharmayanto</td>
										</tr>
										<tr>
											<th>Direktur</th>
											<td>Gede Meivera</td>
										</tr>
		                            </table>
		                        </div>
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
						// include('assets/includes/sidebar_items/cuaca.php');
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