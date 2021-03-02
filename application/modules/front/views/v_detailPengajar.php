					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Pengajar</h2>
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
						<!-- View Detail Pengajar Start -->
							<div class="col-sm-12">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Profile</legend>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-6">
												<img src="<?= base_url('frontend');?>/assets/images/users/pengajar/<?=$viewPengajar[0]['foto'];?>" alt="<?=$viewPengajar[0]['foto'];?>" style="width:100%;">
											</div>
											<div class="col-sm-6">
												<div class="row">
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-6">
																NIS
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['nip'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Nama Pengajar
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['nama_lengkap'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Username
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['username_login'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Alamat
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['alamat'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Tempat Lahir
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['tempat_lahir'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Jenis Kelamin
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['jenis_kelamin'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Agama
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['keterangan'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Nomor Telephone / HP
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['no_telp'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Email
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['email'];?>
															</div>
														</div>

														<div class="row">
															<div class="col-sm-6">
																Blokir
															</div>
															<div class="col-sm-6">
																<?=$viewPengajar[0]['blokir'];?>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<!-- View Detail Pengajar End -->
						</div>
						<button onClick='window.history.back()'>Kembali</button>
					</div>