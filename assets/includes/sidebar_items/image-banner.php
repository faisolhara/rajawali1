						<!-- Image Banner -->
						<div class="sidebar-box image-banner animate-onscroll">
							<a href="#">
								<?php $avatar = $this->session->userdata('avatar');
								$nama = $this->session->userdata('nama');
								?>
								<img src="<?php echo base_url().$avatar;?>">
								<h3><?php echo $nama; ?></h3>
								<!-- <span class="button transparent button-arrow">Find out more</span> -->
							</a>
						</div>
						<!-- /Image Banner -->