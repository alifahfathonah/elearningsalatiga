			<!-- partial:../../partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="profile-name">
                            <p class="name"><?=$user[0]['nama_lengkap']; ?></p>
                            <p class="designation">Pengajar</p>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajar');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DASHBOARD</span></a>
                </li>
                
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajar/profile/'.$this->session->userdata('id'));?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/10.png" alt="menu icon"> <span class="menu-title">My Profil</span></a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajar/kelas');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/class.jpg" alt="menu icon"> <span class="menu-title">Data Kelas</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajar/mapel');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/leason.jpg" alt="menu icon"> <span class="menu-title">Data Mata Pelajaran</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajar/materi');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/sarpra.png" alt="menu icon"> <span class="menu-title">Data Materi</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajar/quis');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/eskul.png" alt="menu icon"> <span class="menu-title">Data Quis</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajar/laporan');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/bursa.png" alt="menu icon"> <span class="menu-title">Data Laporan Nilai</span></a>
                </li>

                <hr>
                <li class="nav-item purchase-button">
                    <a class="nav-link" href="<?= base_url('login/logout');?>"> Keluar</a>
                </li>
                </ul>
            </nav>