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
												<h2>Edit Soal </h2>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>
											<!-- Edit Pengajar Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Pengajar/actionEditSoal/'.$soal[0]['id_soal']);?>
													<div class="row">
														<div class="col-sm-12">

															<div class="form-group">
																<label for="judul">Soal</label>
																<input type="text" class="form-control" id="soal" name="soal" placeholder="Masukkan Soal Yang Akan Di Kerjakan ..." value="<?= $soal[0]['soal'];?>">
															</div>

															<div class="row">
																<div class="col-sm-6">
																	<div class="form-group">
																		<label for="jawabana">Jawaban A</label>
																		<input type="text" class="form-control" id="jawabana" name="jawabana" placeholder="Masukkan Jawaban Soal A ..." value="<?= $soal[0]['pilihan_1'];?>">
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<label for="jawabanb">Jawaban B</label>
																		<input type="text" class="form-control" id="jawabanb" name="jawabanb" placeholder="Masukkan Jawaban Soal B ..." value="<?= $soal[0]['pilihan_2'];?>">
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<label for="jawabanc">Jawaban C</label>
																		<input type="text" class="form-control" id="jawabanc" name="jawabanc" placeholder="Masukkan Jawaban Soal C ..." value="<?= $soal[0]['pilihan_3'];?>">
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<label for="jawaband">Jawaban D</label>
																		<input type="text" class="form-control" id="jawaband" name="jawaband" placeholder="Masukkan Jawaban Soal D ..." value="<?= $soal[0]['pilihan_4'];?>">
																	</div>
																</div>
																<div class="col-sm-6">
																	<div class="form-group">
																		<label for="jawabane">Jawaban E</label>
																		<input type="text" class="form-control" id="jawabane" name="jawabane" placeholder="Masukkan Jawaban Soal E ..." value="<?= $soal[0]['pilihan_5'];?>">
																	</div>
																</div>

																<div class="col-sm-6">
																	<div class="form-group">
																		<label for="kunciJawaban">Kunci Jawaban</label>
																		<select class="form-control" name="kunciJawaban" id="kunciJawaban">
																			<option value="" readonly>
																			<?php
																			if ($soal[0]['jawaban']=='1') {
																				echo 'Jawaban A';
																			} elseif ($soal[0]['jawaban']=='2') {
																				echo 'Jawaban B';
																			} elseif ($soal[0]['jawaban']=='3') {
																				echo 'Jawaban C';
																			} elseif ($soal[0]['jawaban']=='4') {
																				echo 'Jawaban D';
																			} else {
																				echo 'Jawaban E';
																			}
																				;?>
																			</option>
																			<option value="1"> Jawaban A</option>
																			<option value="2"> Jawaban B</option>
																			<option value="3"> Jawaban C</option>
																			<option value="4"> Jawaban D</option>
																			<option value="5"> Jawaban E</option>
																		</select>
																	</div>
																</div>

															</div>

														</div>
													</div>
													<div class="form-group">
														<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
													</div>
												<?= form_close() ;?>
											</div>
											<!-- Edit Pengajar End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>