<?php

/* Global Variables */

$candidate['page-title'] = 'Home'; // Page Title

$candidate['page-layout'] = 'wide'; // Page Layout (values: 'boxed', 'wide')

$candidate['current-menu-item'] = 'Home'; // Current Menu Item


/* Doctype && Stylesheets */
include ('assets/includes/head.php');

/* <header> </header> */
include ('assets/includes/header.php');

?>
<section id="content">

	<!-- Section -->
	<section class="section full-width-bg">

		<div class="row gray-bg">

			<div class="col-lg-12 col-md-12 col-sm-12">

				<!-- Revolution Slider -->
				<div class="tp-banner-container main-revolution">

					<span class="Apple-tab-span"></span>

					<div class="tp-banner">

						<ul>
							<li data-transition="papercut" data-slotamount="7">
								<img src="assets/img/slide/slide1.jpg" alt="">
								<div class="tp-caption" data-x="100" data-y="115" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2 style="color:#white;">Commitment<br>to<br>Excellence</h2></div>
							</li>

							<li data-transition="papercut" data-slotamount="7">
								<img src="assets/img/slide/slide2.jpg" alt="">
								<div class="tp-caption align-center" data-x="center" data-y="135" data-speed="700" data-start="1000" data-easing="easeOutBack"><h4 style="color:#white;" class="great-vibes">Ours Quote</h4></div>
								<div class="tp-caption align-center" data-x="center" data-y="220" data-speed="500" data-start="1200" data-easing="easeOutBack"><h2 style="color:#white;">Society for valuable <br>sustainable growth</h2></div>
							</li>

							<li data-transition="papercut" data-slotamount="7">
								<img src="assets/img/slide/slide3.jpg" alt="">
								<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="150" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2 style="color:#white;">20 YEARS OF EXPERIENCE</h2></div>
								<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="225" data-speed="500" data-start="1200" data-easing="easeOutBack"><h3 ><p style="color:#white;">The Best Sugar Factory</p></h3></div>
							</li>
						</ul>
					</div>
				</div>
				<!-- /Revolution Slider -->
						<div class="row" style="background:#CDD8E0; margin-top:0px; margin-left:23px; margin-right:23px; text-align:center; padding-bottom:10px;">	<h2><strong>SELAMAT DATANG DI WEB OFFICIAL PT PG RAJAWALI NUSANTARA INDONESIA 1</strong></h2>
					</div>
				
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll">
				<p align="justify">
				PT. PG. Rajawali I merupakan anak perusahaan dari RNI Group. Rajawali Nusantara Indonesia atau disingkat sebagai RNI adalah sebuah Badan Usaha Milik Negara yang bergerak di bidang agroindustri, farmasi, dan perdagangan.[6] RNI didirikan pada tahun 1964 sebagai kelanjutan dari nasionalisasi aset-aset grup konglomerat Oei Tiong Ham Concern (OTHC) atau Kian-gwan Kongsi yang didirikan oleh "Raja Gula" Oei Tiong Ham.
				Bidang usaha yang digeluti oleh RNI bersifat integrasi dari hulu sampai hilir. Usaha perkebunan kelapa sawit tidak cukup hingga sampai penjualan CPO, namun juga diolah menjadi minyak goreng. Begitu juga usaha peternakan sapi yang sapinya menjadi daging sapi potong, perkebunan tebu yang hasilnya diolah menjadi gula, dan perkebunan karet yang lateksnya dijadikan kondom dan sarung tangan.
				PT PG RNI 1 termasuk anak perusahaan yang mengolah tebu untuk dijadikan sebagai gula.
				</p>
				<p align="justify">
					PT Pabrik Gula Rajawali I pada awalnya merupakan penggabungan Pabrik Gula Krebet Baru dan Pabrik Gula Rejo Agung Baru tahun 1995, yang merupakan anak perusahaan PT Rajawali Nusantara Indonesia. Dalam menjalankan usahanya, PT PG Rajawali I sebagai kantor pusat berkedudukan di jalan Undaan Kulon No. 57-59 Surabaya - Jawa Timur, sedangkan unit-unit dan anak perusahaan tersebar di wilayah Jawa Timur. Perusahaan ini terus berupaya untuk berkembang melalui produk-produk berdaya saing tinggi. Pengembangan jumlah unit usaha dan jenis produk pun dilakukan untuk mencapai pertumbuhan profit yang berkelanjutan dan mampu memberi nilai tambah perusahaan bagi stake holders. Perusahaan ini bergerak di bidang agroindustri, senantiasa mengutamakan kualitas produk dan layanan dalam upayanya melaksanakan dan menunjang program pemerintah di bidang ekonomi dan pembangunan nasional.
				</p>

			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="col-lg-6 col-md-6 col-sm-12 sidebar">	
					<!-- Popular News -->
					<div class="sidebar-box white animate-onscroll">
						<h3><strong>Berita Terbaru</strong></h3>
						<ul class="popular-news">
							<?php 
							$counter=1;
							foreach($berita as $row){ ?>
							<!-- Blog Item -->
							<li>
								<div class="thumbnail">
									<img src="<?php echo site_url("assets")."/".$row->foto; ?>" alt="">
								</div>
								<div class="post-content">
									<h6><a href="<?php echo site_url("C_Main/beritaSingle")."/".$row->id; ?>"><?php echo $row->judul; ?></a></h6>
									<div class="post-meta">
										<span><?php echo $row->tanggal; ?></span>
									</div>
								</div>
							</li>
							<!-- /Blog Item -->

							<?php 
							$counter++;
							if($counter==4){break;}
						} ?>
						
					</ul>
					<a href="<?php echo base_url();?>C_Main/beritaMore" class="button transparent button-arrow">More news</a>
				</div>
				<!-- /Popular News -->
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 sidebar">
				<?php
				include('assets/includes/sidebar_items/upcoming-events.php');
				?>
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