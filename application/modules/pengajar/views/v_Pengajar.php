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
			<!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
										<div class="row">
											<!-- View Detail Profile Pengajar Start -->
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
											</fieldset>
											<!-- View Detail Profile Pengajar End -->
										</div>
										<div class="row">
											<!-- View Kelola Kelas Pengajar Start -->
											<div class="col-sm-12">
												<fieldset class="scheduler-border">
													<legend class="scheduler-border">Kelola Kelas Yang Anda Bina</legend>
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
												</fieldset>
											</div>
											<!-- View Kelola Kelas Pengajar End -->
										</div>
										<div class="row">
											<!-- View Kelola Mata Pelajaran Yang Di Bina Start -->
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
												</fieldset>
											</div>
											<!-- View Kelola Mata Pelajaran Yang Di Bina End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>