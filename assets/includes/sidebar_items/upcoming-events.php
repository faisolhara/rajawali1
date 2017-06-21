						<!-- Upcoming Events -->
						<div class="sidebar-box white animate-onscroll">
							<h3><strong>Kegiatan RNI 1</strong></h3>
							<ul class="upcoming-events">
								<?php 
								$counter=1;
								foreach ($event as $row) {?>
								<!-- Event -->
								<li>
									<div class="date">
										<span>
											<span class="day"><?php echo $row->hari;?></span>
											<span class="month">DEC</span>
										</span>
									</div>
									
									<div class="event-content">
										<h6><a href="<?php echo base_url();?>C_Main/kegiatan"><?php echo $row->event; ?></a></h6>
										<ul class="event-meta">
											<li><i class="icons icon-clock"></i><?php echo $row->tanggal;?></li>
											<li><i class="icons icon-location"></i> <?php echo $row->tempat; ?></li>
										</ul>
									</div>
								</li>
								<!-- /Event -->
								<?php 
								$counter++;
								if ($counter==4) {
									break;
								}
								} ?>

								
							</ul>
							<a href="<?php echo base_url();?>C_Main/kegiatan" class="button transparent button-arrow">More events</a>
						</div>
						<!-- /Upcoming Events -->