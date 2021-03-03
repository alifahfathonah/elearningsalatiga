<?php defined('BASEPATH') or exit('No direct script access allowed');?>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?= base_url('front');?>">
					<img src="<?= base_url('frontend');?>/assets/images/logo/logo.png" alt="logo.png" style="width:45px;heigth:45px;" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php if($this->uri->segment('2')==''){echo 'active';}else{echo '';};?>"><a class="nav-link" href="<?= base_url('front');?>">Home</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="#">Sarana Prasarana</a></li> -->
						<!-- <li class="nav-item"><a class="nav-link" href="#">Ekstrakulikuler</a></li> -->
						<li class="nav-item <?php if($this->uri->segment('2')==="keunggulan"){echo 'active';}else{echo '';};?>"><a class="nav-link" href="<?= base_url('front/keunggulan');?>">Keunggulan</a></li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">BKK </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.html">Bursa Kerja </a>
								<a class="dropdown-item" href="course-grid-3.html">Mitra Kerja </a>
							</div>
						</li> -->
                        <li class="nav-item <?php if($this->uri->segment('2')==="prestasi"){echo 'active';}else{echo '';};?>"><a class="nav-link" href="<?= base_url('front/prestasi');?>">Prestasi</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->