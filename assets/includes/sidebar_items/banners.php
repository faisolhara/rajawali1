						<div class="sidebar-box white animate-onscroll">
							<h3><strong>Menu :</strong></h3>

							<?php if ($avatar = $this->session->userdata('unit') == 'krebet') { ?>
								<div class="banner-wrapper">
									<a class="banner animate-onscroll" href="<?php echo base_url()?>C_Krebet/cetakNota">
										<i class="icons icon-print"></i>
										<h4>&nbsp Data Cetak Nota</h4>
									</a>
								</div>
								<div class="banner-wrapper">
									<a class="banner animate-onscroll" href="<?php echo base_url()?>C_Krebet/produksi">
										<i class="icons icon-warehouse"></i>
										<h4>&nbsp Data Produksi</h4>
									</a>
								</div>
							<?php } elseif ($avatar = $this->session->userdata('unit') == 'rejoagung') {?>
								<div class="banner-wrapper">
									<a class="banner animate-onscroll" href="<?php echo base_url()?>C_Rejoagung/cetakNota">
										<i class="icons icon-print"></i>
										<h4>&nbsp Data Cetak Nota</h4>
									</a>
								</div>
								<div class="banner-wrapper">
									<a class="banner animate-onscroll" href="<?php echo base_url()?>C_Rejoagung/produksi">
										<i class="icons icon-warehouse"></i>
										<h4>&nbsp Data Produksi</h4>
									</a>
								</div>
							<?php } ?>
							
						</div>
