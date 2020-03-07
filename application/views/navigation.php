<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand pull-left" href="<?php echo base_url('dashboard');?>">SISPENSI PDRD</a>
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('dashboard');?>"><i class="splashy-home_green"></i> Beranda</a></li>
                <li><a href="<?php echo base_url('ranperda');?>"><i class="splashy-document_a4_marked"></i> Ranperda</a></li>
                <li><a data-toggle="modal" id="zbtnModalNotification" data-backdrop="static" href="#myNotification" data-placement="bottom" data-container="body"><i class="splashy-mail_light"></i> Pemberitahuan</a></li>
                <?php if($this->session->userdata('level') == 'Y') { ?>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="splashy-sprocket_light"></i> Pengaturan <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('profile');?>"><i class="splashy-group_blue"></i> Users Daerah</a></li>
                        <li><a href="<?php echo base_url('profile/pusat');?>"><i class="splashy-contact_blue_add"></i> Admin Pusat</a></li>
                    </ul>
                </li>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav user_menu pull-right">
                <li class="dropdown">
                    <a href="#"><?php echo $this->session->userdata('whoami'); ?></a>
                </li>
                <li class="divider-vertical hidden-sm hidden-xs"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $this->config->item("theme"); ?>img/user_avatar.png" alt="" class="user_avatar"><?php echo $this->session->userdata('nama_lengkap'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="<?php echo base_url('profile/detail/kabkot/'.$this->session->userdata('usrcd'));?>"><i class="splashy-contact_blue"></i> My Profile</a></li>
                        <li><a href="<?php echo base_url('api/changepassword');?>"><i class="splashy-lock_large_unlocked"></i> Ganti Password</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('login/logout');?>"><i class="splashy-gem_remove"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>