<!DOCTYPE html>
<html lang="en">
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Metas -->
    <title><?= $titles ;?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url('frontend');?>/assets/images/template/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url('frontend');?>/assets/images/template/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend');?>/assets/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="<?= base_url('frontend');?>/assets/js/modernizer.js"></script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 
	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">							
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="">
					<img src="<?= base_url('frontend');?>/assets/images/logo/logo.png" alt="logo.png" style="width:45px;heigth:45px;" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="">Home</a></li>
						<!-- <li class="nav-item"><a class="nav-link" href="#">Sarana Prasarana</a></li> -->
						<li class="nav-item"><a class="nav-link" href="#">Ekstrakulikuler</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Penerimaan Siswa</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Keunggulan</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">BKK </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="course-grid-2.html">Bursa Kerja </a>
								<a class="dropdown-item" href="course-grid-3.html">Mitra Kerja </a>
							</div>
						</li>
                        <li class="nav-item"><a class="nav-link" href="#">Prestasi</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleControls" data-slide-to="1"></li>
			<li data-target="#carouselExampleControls" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('<?= base_url('frontend');?>/assets/images/template/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<h2><img src="<?=base_url('frontend');?>/assets/images/logo/logo.png" alt="logo.png" style="width:75px;heigth:75px;"></h2>
										<p class="lead">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('<?= base_url('frontend');?>/assets/images/template/slider-02.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-left">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight">SmartEDU <strong>education school</strong></h2>
										<p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<div class="carousel-item">
				<div id="home" class="first-section" style="background-image:url('<?= base_url('frontend');?>/assets/images/template/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-center">
									<div class="big-tagline">
										<h2 data-animation="animated zoomInRight"><strong>VPS Servers</strong> Company</h2>
										<p class="lead" data-animation="animated fadeInLeft">1 IP included with each server 
											Your Choice of any OS (CentOS, Windows, Debian, Fedora)
											FREE Reboots</p>
											<a href="#" class="hover-btn-new"><span>Contact Us</span></a>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="#" class="hover-btn-new"><span>Read More</span></a>
									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
			<!-- Left Control -->
			<a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="fa fa-angle-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>

			<!-- Right Control -->
			<a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="fa fa-angle-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>PENERIMAAN PESERTA DIDIK BARU</h3>
                    <h5>TAHUN PELAJARAN 2021 / 2022</h5>
                </div>
            </div>
            <!-- end title -->
        
            <style>
                .kotak{
                    background-color:green;
                }
                .menjorok{
                    margin-left:20px;
                }
                .kotakinfo{
                    background-color:red;
                    width:750px;
                }
            </style>
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="message-box">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="kotak">
                                    1. JALUR KHUSUS
                                </div>
                            </div>
                            <div class="col-sm-9"></div>
                        </div>
                        <div class="row menjorok">
                            <span>Syarat Pendaftaran</span>
                            <br>
                            <ol>
                                <li>Mengisi Formulir Pendaftaran (Secara Online / Offline)</li>
                                <li>Menyerahkan Fotocopy Akte Kelahiran</li>
                                <li>Menyerahkan Fotocopy Kartu Keluarga</li>
                            </ol>
                        </div>
                        <center>
                            Waktu Pendaftaran
                            <div class="kotakinfo">
                                <h2>14 Desember 2020 - 16 Mei 2021</h2>
                            </div>
                        </center>
                        <i>
                            <div class="note">
                                <i>
                                    <center>
                                        <font color="red"> # 200 Pendaftaran pertama jaluk khusus bahan pakaian seragam 2 setel GRATIS</font>
                                    </center>
                                </i>
                            </div>
                        </i>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="kotak">
                                    2. JALUR REGULER
                                </div>
                            </div>
                            <div class="col-sm-8">

                            </div>
                        </div>
                        <div class="row menjorok">
                            <span>Syarat Pendaftaran</span>
                            <br>
                            <ol>
                                <li>Mengisi Formulir Pendaftaran (Secara Online / Offline)</li>
                                <li>Menyerahkan Fotocopy Akte Kelahiran</li>
                                <li>Menyerahkan Fotocopy Kartu Keluarga</li>
                                <li>Menyerahkan Fotocopy KIP (jika ada)</li>
                                <li>Menyerahkan Fotocopy Piagam kejuaran (jika ada)</li>
                                <li>Menyerahkan Pas Foto Ukuran 3X4 Berwarna (2 lbr)</li>
                                <li>Menyerahkan Surat Keterangan Lulus</li>
                                <li>Menyerahkan Fotocopy Ijazah SMP / Mts</li>
                                <li>Usia Calon Pendaftaran 17 Juni 2021 Tidak Lebih dari 21 Tahun</li>
                            </ol>
                        </div>
                        <center>
                            Waktu Pendaftaran
                            <div class="kotakinfo">
                                <h2>18 Mei 2021 - 10 Juli 2021</h2>
                            </div>
                        </center>
                        <br>
                        <!-- <div class="row">
                            <div class="col-sm-3">
                                <div class="kotak">
                                    3. JALUR PENDAFTARAN
                                </div>
                            </div>
                            <div class="col-sm-8"></div>
                        </div>
                        <div class="row menjorok">
                            <ol>
                                <li>Pendaftaran Online Melalui Link :</li>
                            </ol>
                        </div> -->
                    </div>
                </div>
			</div>
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url('frontend');?>/assets/images/template/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
				
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>The standard Lorem Ipsum passage, used since the 1500s</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>

                        <a href="#" class="hover-btn-new orange"><span>Learn More</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section lb page-section">
		<div class="container">
			<div class="section-title row text-center">
                <div class="col-md-12">
                    <h3>Sarana Prasarana</h3>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <?php
                        $no = 1;
                        $data = count($srapra)/2;
                        foreach ($srapra as $row) {;?>
                            <?php if ($no<=$data){;?>
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <?= $no.'. '.$row['keterangan'] ;?>
                                    </div>
                                </div>
                            <?php } else {;?>
                                <div class="col-sm-6">
                                    <div class="text-left">
                                        <?= $no.'. '.$row['keterangan'] ;?>
                                    </div>
                                </div>
                                <?php }
                            ;?>
                        <?php
                        $no++ ;
                    };?>
                    </div>
                </div>
            </div>
		</div>
	</section>

	<div class="section cl">
		<div class="container">
			<div class="row text-left stat-wrap">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
					<p class="stat_count"><?= count($siswa) ;?></p>
					<h3>Siswa</h3>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
					<p class="stat_count"><?= count($pengajar) ;?></p>
					<h3>Guru</h3>
				</div>

				<!-- <div class="col-md-4 col-sm-4 col-xs-12">
					<span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
					<p class="stat_count">55</p>
					<h3>Years Completed</h3>
				</div> -->
			</div>
		</div>
	</div>

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Choose Your Plan</h3>
                <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a class="active" href="#tab1" data-toggle="pill">Monthly Subscription</a></li>
                            <li><a href="#tab2" data-toggle="pill">Yearly Subscription</a></li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div>

            <hr class="invis">

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$45</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$59</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$85</h2>
                                            <h3>per month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->

                        <div class="tab-pane fade" id="tab2">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$477</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$485</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>$500</h2>
                                            <h3>Year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="hover-btn-new orange"><span>Order Now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('<?= base_url('frontend');?>/assets/images/template/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p> Testimoni Dari Para Alumni</p>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <?php
                        foreach ($testi as $row) {;?>
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <h4><?= $row['nama_lengkap'] ;?> </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?= $row['judul'] ;?></h3>
                                <p class="lead"><?= $row['konten'] ;?>.</p>
                            </div>
                        </div>
                        <?php }
                        ;?>
<!-- 
                        <div class="testimonial clearfix">
							<div class="testi-meta">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="<?= base_url('frontend');?>/assets/images/template/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="<?= base_url('frontend');?>/assets/images/template/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="<?= base_url('frontend');?>/assets/images/template/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="<?= base_url('frontend');?>/assets/images/template/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="<?= base_url('frontend');?>/assets/images/template/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="<?= base_url('frontend');?>/assets/images/template/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>   
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Pricing</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">smkmuh1pbg@yahoo.co.id</a></li>
                            <li><a href="http://smkmusaga.sch.id/">http://smkmusaga.sch.id/</a></li>
                            <li>Jl. Let. Jend. S. Parman PO BOX 125 Purbalingga</li>
                            <li>+61 281 - 895768</li>
                        </ul>
                    </div>
                </div>
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SmartEDU</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?= base_url('frontend');?>/assets/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('frontend');?>/assets/js/custom.js"></script>
	<script src="<?= base_url('frontend');?>/assets/js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>