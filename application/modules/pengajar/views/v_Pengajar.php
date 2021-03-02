					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
									<p>
										Hai <i> <?= $this->session->userdata('username') ;?></i>, Selamat Datang di Halaman Pengajar SMK Muhammadiyah 1  Purbalingga. Silahkan Klik Menu Yang Ada Di Sebelah Kiri Untuk Mengelola Website.
									</p>
							</div>
						</div>

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

						<style>
							fieldset.scheduler-border {
									border: solid 1px #DDD !important;
									padding: 0 10px 10px 10px;
									border-bottom: none;
							}

							legend.scheduler-border {
									width: auto !important;
									border: none;
									font-size: 14px;
							}
						</style>
						<div class="row">
							<!-- View Detail Profile Pengajar Start -->
							<div class="col-sm-12">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Profile</legend>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6">
												<img src="<?= base_url('frontend');?>/assets/images/users/pengajar/<?=$pengajar[0]['foto'];?>" alt="<?=$pengajar[0]['foto'];?>" style="width:100%;">
											</div>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-6">
																NIP
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['nip'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Nama
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['nama_lengkap'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Username
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['username_login'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Alamat
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['alamat'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Tempat Lahir
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['tempat_lahir'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Jenis Kelamin
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['jenis_kelamin'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Agama
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['keterangan'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Nomor Telephone / HP
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['no_telp'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Email
															</div>
															<div class="col-sm-6">
																<?=$pengajar[0]['email'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Aksi
															</div>
															<div class="col-sm-6">
																<a href="<?= base_url('pengajar/editProfilePengajar');?>">Edit Profile</a>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<!-- View Detail Profile Pengajar  End -->

							<!-- View Kelola Kelas Pengajar  Start -->
							<div class="col-sm-12">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Kelola Kelas Yang Anda Bina</legend>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responive">
													<table id="tableKelasDetPengajar" class="table table-striped table-bordered table-hover" style="width:100%">
														<thead>
															<tr>
																<th class="center">
																	No
																</th>
																<th>Nama Kelas</th>
																<th>Guru</th>
																<th>Ketua Kelas</th>
																<th>Aksi</th>
															</tr>
														</thead>

														<tbody>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<!-- View Kelola Kelas Pengajar End -->

							<!-- View Kelola Mata Pelajaran Yang Di Bina  Start -->
							<div class="col-sm-12">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Mata Pelajaran Yang Anda Bina</legend>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responive">
													<table id="tableMapelPengajar" class="table table-striped table-bordered table-hover">
														<thead>
															<tr>
																<th class="center">
																	No
																</th>
																<th>Nama</th>
																<th>Kelas</th>
																<th>Pengajar</th>
																<th>Deskripsi</th>
															</tr>
														</thead>

														<tbody>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<!-- View Kelola Mata Pelajaran Yang Di Bina  End -->
						</div>
						
					</div>