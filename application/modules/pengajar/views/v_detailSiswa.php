					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Siswa</h2>
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
						<!-- View Detail Siswa Start -->
							<div class="col-sm-12">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Profile</legend>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6">
												<img src="<?= base_url('frontend');?>/assets/images/users/siswa/<?=$viewSiswa[0]['foto'];?>" alt="<?=$viewSiswa[0]['foto'];?>" style="width:100%;">
											</div>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-6">
																NIS
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['nis'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Nama Siswa
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['nama_lengkap'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Username
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['username_login'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Alamat
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['alamat'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Tempat Lahir
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['tempat_lahir'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Jenis Kelamin
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['jenis_kelamin'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Agama
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['keterangan'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Nomor Telephone / HP
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['no_telp'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Email
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['email'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Blokir
															</div>
															<div class="col-sm-6">
																<?=$viewSiswa[0]['blokir'];?>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<!-- View Detail Siswa End -->
						</div>
						<button onClick='window.history.back()'>Kembali</button>
					</div>