						<!-- Popular News -->
						<div class="sidebar-box white animate-onscroll">
							<h3><strong>Berita Terbaru</strong></h3>
							<ul class="popular-news">
								<?php 
								$counter=1;
								foreach($berita as $row){ ?>
								<!-- Blog Item -->

								<li>
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
								if($counter==5){break;}
							} ?>

						</ul>
						<a href="<?php echo base_url();?>C_Main/beritaMore" class="button transparent button-arrow">More news</a>
					</div>
						<!-- /Popular News -->