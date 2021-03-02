					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Add Quis</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<?= validation_errors(); ?>
								<button class="btn btn-success add-more" type="button">
									<i class="glyphicon glyphicon-plus"></i> Add
								</button>
							</div>
							<!-- Edit Pengajar Start -->
							<div class="col-sm-12">
								<?= form_open_multipart('Pengajar/addQuis/'.$this->uri->segment('3')) ;?>
									<div class="control-group after-add-more">
										<div class="row">
											<div class="col-sm-12">
												
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<label for="judul">Soal</label>
															<input type="text" class="form-control" id="judul[]" name="judul[]" placeholder="Masukkan Soal Yang Akan Di Kerjakan ...">
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="jawabana">Jawaban A</label>
															<input type="text" class="form-control" id="jawabana[]" name="jawabana[]" placeholder="Masukkan Jawaban Soal A ...">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="jawabanb">Jawaban B</label>
															<input type="text" class="form-control" id="jawabanb[]" name="jawabanb[]" placeholder="Masukkan Jawaban Soal B ...">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="jawabanc">Jawaban C</label>
															<input type="text" class="form-control" id="jawabanc[]" name="jawabanc[]" placeholder="Masukkan Jawaban Soal C ...">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="jawaband">Jawaban D</label>
															<input type="text" class="form-control" id="jawaband[]" name="jawaband[]" placeholder="Masukkan Jawaban Soal D ...">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label for="jawabane">Jawaban E</label>
															<input type="text" class="form-control" id="jawabane[]" name="jawabane[]" placeholder="Masukkan Jawaban Soal E ...">
														</div>
													</div>

													<div class="col-sm-6">
														<div class="form-group">
															<label for="kunciJawaban">Kunci Jawaban</label>
															<select class="form-control" name="kunciJawaban[]" id="kunciJawaban[]">
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

										<div class="row">
											<div class="col-sm-12">
													<label for="soalEssay">Soal Essay</label>
												<div class="form-group">
													<textarea name="soalEssay" id="soalEssay" cols="135" rows="10"></textarea>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
										</div>
									</div>
										
								<?= form_close() ;?>
							</div>
							<!-- Edit Pengajar End -->

							<!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
							<div class="copy hide" style="display:none">
								<div class="control-group">
									<div class="row">
										<div class="col-sm-12">
											
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<label for="judul">Soal</label>
														<input type="text" class="form-control" id="judul[]" name="judul[]" placeholder="Masukkan Soal Yang Akan Di Kerjakan ...">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label for="jawabana">Jawaban A</label>
														<input type="text" class="form-control" id="jawabana[]" name="jawabana[]" placeholder="Masukkan Jawaban Soal A ...">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="jawabanb">Jawaban B</label>
														<input type="text" class="form-control" id="jawabanb[]" name="jawabanb[]" placeholder="Masukkan Jawaban Soal B ...">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="jawabanc">Jawaban C</label>
														<input type="text" class="form-control" id="jawabanc[]" name="jawabanc[]" placeholder="Masukkan Jawaban Soal C ...">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="jawaband">Jawaban D</label>
														<input type="text" class="form-control" id="jawaband[]" name="jawaband[]" placeholder="Masukkan Jawaban Soal D ...">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label for="jawabane">Jawaban E</label>
														<input type="text" class="form-control" id="jawabane[]" name="jawabane[]" placeholder="Masukkan Jawaban Soal E ...">
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<label for="kunciJawaban">Kunci Jawaban</label>
														<select class="form-control" name="kunciJawaban[]" id="kunciJawaban[]">
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
									<br>
									<hr>
									<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
								</div>
							</div>
						
						</div>
					</div>