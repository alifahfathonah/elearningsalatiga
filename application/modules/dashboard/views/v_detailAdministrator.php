            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- <h3> <b>Dashboard</b> <small class="text-muted"></small></h3>
                    <hr> -->
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
										<div class="row">
											<div class="col-sm-12">
											<h2>Manajemen Administrator</h2>
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
										<!-- View Detail Administrator Start -->
											<div class="col-sm-12">
												<fieldset class="scheduler-border">
													<legend class="scheduler-border">Data Profile</legend>
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-12">
																<div class="row">
																	<div class="col-sm-12">
																		<div class="row">
																			<div class="col-sm-6">
																				Nama Administrator
																			</div>
																			<div class="col-sm-6">
																				<?=$viewAdmin[0]['nama_lengkap'];?>
																			</div>
																		</div>

																		<div class="row">
																			<div class="col-sm-6">
																				Username
																			</div>
																			<div class="col-sm-6">
																				<?=$viewAdmin[0]['username'];?>
																			</div>
																		</div>

																		<div class="row">
																			<div class="col-sm-6">
																				Alamat
																			</div>
																			<div class="col-sm-6">
																				<?=$viewAdmin[0]['alamat'];?>
																			</div>
																		</div>

																		<div class="row">
																			<div class="col-sm-6">
																				Nomor Telephone / HP
																			</div>
																			<div class="col-sm-6">
																				<?=$viewAdmin[0]['no_telp'];?>
																			</div>
																		</div>

																		<div class="row">
																			<div class="col-sm-6">
																				Email
																			</div>
																			<div class="col-sm-6">
																				<?=$viewAdmin[0]['email'];?>
																			</div>
																		</div>

																		<div class="row">
																			<div class="col-sm-6">
																				Blokir
																			</div>
																			<div class="col-sm-6">
																				<?=$viewAdmin[0]['blokir'];?>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
											<!-- View Detail Administrator End -->
										</div>
										<a href="<?= base_url('dashboard/administrator');?>" class="btn btn-primary btn-sm"> Kembali</a>
									</div>  
								</div>
							</div>                  
                        </div>
                    </div>
                </div>