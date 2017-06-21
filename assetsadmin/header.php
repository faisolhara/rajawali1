 <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
            <div class="navbar-brand-group">
                <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                    <i class="fa fa-lg fa-fw fa-bars"></i>
                </a>
                <a class="navbar-brand hidden-xxs" href="<?php echo site_url('C_Admin'); ?>">
                    <span class="sc-visible">
                        RNI
                    </span>
                    <span class="sc-hidden">
                        <span class="bold">RNI 1</span>
                        ADMIN
                    </span>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                        <img class="img-circle" src="<?php echo base_url().$this->session->userdata('avatar');?>">
                        <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
                    </a>
                </li>
                <li class="btn-danger">
                    <a onclick="return confirm('Anda yakin ingin keluar?')" href="<?php echo base_url();?>C_Login/logout"><i class="fa fa-power-off"></i><strong>&nbsp Log Out</strong></a>
                </li>
            </ul>
            
        </nav>