			<!-- partial:../../partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                    <div class="profile-image"> <img src="<?=base_url('frontend');?>/assets/images/users/siswa/<?=$user[0]['foto']; ?>" alt="<?=$user[0]['foto']; ?>" style="width:50px;heigth:50px;border:3px solid black;"/> <span class="online-status online"></span> </div>
                    <div class="profile-name">
                        <p class="name"><?=$user[0]['nama_lengkap']; ?></p>
                        <p class="designation">Siswa</p>
                        <!-- <div class="badge badge-teal mx-auto mt-3"><?=$user[0]['status']; ?></div> -->
                    </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">DASHBOARD</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/profile/'.$this->session->userdata('id_siswa'));?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/10.png" alt="menu icon"> <span class="menu-title">My Profil</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/materi');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/04.png" alt="menu icon"> <span class="menu-title">Materi </span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/quis');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/absensi 3.png" alt="menu icon"> <span class="menu-title">Quiz </span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/nilai');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Nilai </span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/testimoni');?>"><img class="menu-icon" src="<?= base_url('frontend');?>/assets/images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Testimoni </span></a>
                </li>
                <!-- Absen Start -->
                
                <!-- Absen End -->
                <hr>
                <li class="nav-item purchase-button">
                    <a class="nav-link" href="<?= base_url('login/logout');?>"> Keluar</a>
                </li>
                </ul>
            </nav>