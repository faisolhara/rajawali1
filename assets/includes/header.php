		
		<!-- Container -->
		<div class="container">
			<!-- Header -->
			<header id="header" class="animate-onscroll">
				
				<!-- Main Header -->
				<div id="main-header">
					<div class="container">
					<div class="row">	
						
						<!-- Logo -->
						<div id="logo" class="col-lg-3 col-md-3 col-sm-3">
							
							<a href=""><img src="<?php echo base_url()."assets/"?>img/logoz.png" alt="Logo"></a>
							
						</div>
						<!-- /Logo -->
						
						
						
						<!-- Main Quote -->
						<div class="col-lg-5 col-md-4 col-sm-4">
							
							<blockquote>Satu-satunya Pabrik Paling Berkualitas <br>di Indonesia yang bertaraf Internasional

..</blockquote>
							
						</div>
						<!-- /Main Quote -->
						
						
						
						
						
						
						
					</div>
					
					</div>
					
				</div>
				<!-- /Main Header -->
								
				<!-- Lower Header -->
				<div id="lower-header">
					
					<div class="container">
					
					<div id="menu-button">
						<div>
						<span></span>
						<span></span>
						<span></span>
						</div>
						<span>Menu</span>
					</div>
					
					<ul id="navigation">
						
						<!-- Home -->
						<li class="home-button <?php if($candidate['current-menu-item'] == 'Home') echo 'current-menu-item'; ?>">					
							<a href="<?php echo base_url()?>C_main"><i class="icons icon-home"></i></a>						
						</li>
						<!-- /Home -->

						<!--  Profil -->
						<li <?php if($candidate['current-menu-item'] == 'Profil') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/profil">Profil</a>
						</li>
						<!-- /Profil -->

						<!--  Berita -->
						<li <?php if($candidate['current-menu-item'] == 'Berita') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/beritaBeranda">Berita</a>
						</li>
						<!-- /Berita -->

						<!--  Kegiatan -->
						<li <?php if($candidate['current-menu-item'] == 'Kegiatan') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/kegiatan">Kegiatan</a>
						</li>
						<!-- /Kegiatan -->

						<!-- Unit Usaha -->
						<li <?php if($candidate['current-menu-item'] == 'Unit Usaha') echo 'class="current-menu-item"'; ?>>
						
							<span>Unit Usaha</span>
							
							<ul>
							
								<li><a href="<?php echo base_url()?>C_main/unitKrebet">PG Krebet Baru</a></li>
								<li><a href="<?php echo base_url()?>C_main/unitRejo">PG Rejo Agung</a></li>
								
							</ul>
							
						</li>
						<!-- /Unit Usaha -->	

						<!--  Galeri -->
						<li <?php if($candidate['current-menu-item'] == 'Galeri') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/galeri">Galeri</a>
						</li>
						<!-- /Galeri -->

						<!--  Kontak -->
						<li <?php if($candidate['current-menu-item'] == 'Kontak') echo 'class="current-menu-item"'; ?>>
							<a href="<?php echo base_url()?>C_main/kontak">Kontak</a>
						</li>
						<!-- /Kontak -->
						
						<!-- Sign In -->

						<li class="donate-button <?php if($candidate['current-menu-item'] == 'Login') echo 'current-menu-item'; ?>">
							<a href="<?php echo base_url()?>C_Login/login">Sign In</a>
						</li>
						
						
						<!-- /Signin -->
						
					</ul>
					
					</div>
					
				</div>
				<!-- /Lower Header -->
				
				
			</header>
			<!-- /Header -->