<?php defined('BASEPATH') or exit('No direct script access allowed');?>
    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('<?= base_url('frontend');?>/assets/images/template/slider-01.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
                                        <a href="<?= base_url('login');?>" class="hover-btn-new"><span>Login</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                        <h2>Ekstrakulikuler</h2>
                        <p>
                            <?php
                            $no= 1 ;
                            foreach ($eskul as $row) {
                                echo '<a href="front/cekEskul/'.$row['id_eskul'].'">'.$no++.'. '. $row['keterangan'].'</a>';
                                echo '</br>';
                            }
                            ;?>
                        </p>
                    </div>
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

    <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('<?= base_url('frontend');?>/assets/images/template/parallax_04.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p> Testimoni Dari Para Siswa</p>
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
            <div class="section-title text-center">
                <h3>MITRA BKK</h3>
            </div>
            <div class="row logos">
        <?php
        foreach ($mitra as $row) {;?>
            
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <!-- <a href="#"><img src="<?= base_url('frontend');?>/assets/images/template/logo_01.png" alt="" class="img-repsonsive"></a> -->
                    <?= $row['nama_mitra'] ;?>
                </div>
            <?php } ;?>
            </div>
        </div>
    </div>
