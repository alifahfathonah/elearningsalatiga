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
												<h2>Manajemen Mitra BKK</h2>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>

											<!-- Add Sarana Prasarana Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Dashboard/actionAddMitraBKK');?>

													<div class="form-group">
														<label for="nama_mitra">Nama Mitra</label>
														<input type="text" class="form-control" id="nama_mitra" name="nama_mitra" autofocus>
													</div>

													<div class="form-group">
														<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
													</div>
												<?= form_close() ;?>
											</div>
											<!-- Add Sarana Prasarana End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>