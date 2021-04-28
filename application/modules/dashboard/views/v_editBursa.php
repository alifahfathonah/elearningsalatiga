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
												<h2>Manajemen Bursa Kerja</h2>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>

											<!-- Edit Bursa Kerja Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Dashboard/actionEditBursa/'.$bursa[0]['id_bursa']);?>

													<div class="form-group">
														<label for="keterangan">Keterangan</label>
														<br>
														<!-- <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $bursa[0]['keterangan'];?>" autofocus> -->
														<textarea name="keterangan" id="keterangan" cols="100" rows="5"><?= $bursa[0]['keterangan'];?></textarea>
													</div>

													<div class="form-group">
														<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
													</div>
												<?= form_close() ;?>
											</div>
											<!-- Edit Bursa Kerja End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>