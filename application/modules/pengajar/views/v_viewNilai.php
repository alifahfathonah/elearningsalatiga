			<!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
										<div class="row">
											<div class="col-sm-12">
												<h2>Laporan Nilai</h2>
											</div>
										</div>

										<br>
										<div class="row">
											<div class="col-sm-12">
												<?= form_open_multipart('Pengajar/actionViewNilai');?>
													<div class="row">

														<div class="col-sm-12">
															<div class="form-group">
																<label for="topik">Topik Quiz :</label>
																<select class="form-control" id="topik" name="topik">
																	<option value="" readonly> Pilih Topik Quiz</option>
																	<?php
																												foreach ($topik as $row) {
																													; ?>
																		<option value="<?= $row['id_tq']; ?>"><?= $row['judul']; ?></option>
																	<?php
																												}
																												;?>
																</select>
															</div>
														</div>
													</div>

													<!-- <div class="row">
														<div class="col-sm-12">
															Lapangan Data Nilai Per - Periode
														</div>
													</div> -->
													<div class="row">
														<div class="col-sm-12">
															
															<!-- <div class="row">
																<div class="col-sm-2">
																	Dari Tanggal
																</div>
																<div class="col-sm-10">
																	<input type="text" class="form-control datepicker" id="startDate" name="starDate" autocomplete="off" onkeydown="onlyNumbers(event)" onpaste="onlyNumbers(event)" onkeydown="return false" required>
																</div>
															</div>

															<div class="row">
																<div class="col-sm-2">
																	s/d Tanggal
																</div>
																<div class="col-sm-10">
																	<input type="text" class="form-control datepicker" id="endDate" name="endDate" autocomplete="off" onkeydown="onlyNumbers(event)" onpaste="onlyNumbers(event)" onkeydown="return false" required>
																</div>
															</div> -->

															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<button type="submit" class="btn btn-info" id="proses" name="proses"> Proses</button>
																	</div>
																</div>
															</div>

														</div>
													</div>
												<?= form_close() ;?>
											</div>
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>