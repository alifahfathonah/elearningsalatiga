            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h3> <b>Dashboard</b> <small class="text-muted"></small></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
									<div class="row">
								<div class="col-sm-12">
										<p>
											Hai <i> <?= $this->session->userdata('username') ;?></i>, Selamat Datang di Halaman Administrator SMK Muhammadiyah 1  Purbalingga. Silahkan Klik Menu Yang Ada Di Sebelah Kiri Untuk Mengelola Website.
										</p>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<h4>
										<b>QUICK LINK</b>
									</h4>
								</div>
							</div>
							<br>

							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-2 text-center">
											<i class="fa fa-user fa-5x"></i>
											<a href="<?= base_url('dashboard/administrator');?>">
												<br>
												Administrator
											</a>
										</div>

										<div class="col-sm-2 text-center">
											<i class="fa fa-user fa-5x"></i>
											<a href="<?= base_url('dashboard/pengajar');?>">
												<br>
												Pengajar
											</a>
										</div>

										<div class="col-sm-2 text-center">
											<i class="fa fa-user fa-5x"></i>
											<a href="<?= base_url('dashboard/siswa');?>">
												<br>
												Siswa
											</a>
										</div>

										<div class="col-sm-2 text-center">
											<i class="fa fa-info-circle fa-5x"></i>
											<br>
											<a href="<?= base_url('dashboard/kelas');?>">
												Data Kelas
											</a>
										</div>

										<div class="col-sm-3 text-center">
											<i class="fa fa-info-circle fa-5x"></i>
											<br>
											<a href="<?= base_url('dashboard/mapel');?>">
												Mata Pelajaran
											</a>
										</div>
										
									</div>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-8">

								</div>
								<div class="col-sm-4">
									<p>
										<h8>
											Login : Hari <?= getConvertHari() ;?>, Tanggal <?= tgl_indo(date('Y-m-d')) ;?>, Jam <?= date('h:i:s') ;?>,</p>
										</h8>
								</div>
							</div>
								</div>
                            </div>
                        </div>                  
                        </div>
                    </div>
                </div>