			<!-- partial:../../partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                    <!-- <div class="profile-image"> <img src="<?=base_url('frontend');?>/assets/images/users/siswa/<?=$user[0]['foto']; ?>" alt="<?=$user[0]['foto']; ?>" style="width:50px;heigth:50px;border:3px solid black;"/> <span class="online-status online"></span> </div> -->
                    <div class="profile-name">
                        <p class="name"><?=$user[0]['nama_lengkap']; ?></p>
                        <p class="designation">Administrator</p>
                        <!-- <div class="badge badge-teal mx-auto mt-3"><?=$user[0]['status']; ?></div> -->
                    </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DASHBOARD</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/profile/'.$this->session->userdata('id'));?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/10.png" alt="menu icon"> <span class="menu-title">My Profil</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/kelas');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/class.jpg" alt="menu icon"> <span class="menu-title">Data Kelas</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/mapel');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/leason.jpg" alt="menu icon"> <span class="menu-title">Data Mata Pelajaran</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/mapel');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/report.png" alt="menu icon"> <span class="menu-title">Data Laporan Materi</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/sarpra');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/sarpra.png" alt="menu icon"> <span class="menu-title">Data Sarana Prasarana</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/eksul');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/eskul.png" alt="menu icon"> <span class="menu-title">Data Ekstrakulikuler</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/bursa');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/bursa.png" alt="menu icon"> <span class="menu-title">Data Bursa Kerja</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('dashboard/mitrabkk');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/partner.png" alt="menu icon"> <span class="menu-title">Data Mitra BKK</span></a>
                </li>

                <hr>
                <li class="nav-item purchase-button">
                    <a class="nav-link" href="<?= base_url('login/logout');?>"> Keluar</a>
                </li>
                </ul>
            </nav>