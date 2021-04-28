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
												<h2>Manajemen Ekstra Kulikuler</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>

											<!-- Add Ekstra Kulikuler Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Dashboard/actionEditEskul/'.$eskul[0]['id_eskul']);?>

													<div class="form-group">
														<label for="keterangan">Keterangan</label>
														<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $eskul[0]['keterangan'];?>" autofocus>
													</div>

													<div class="form-group">
														<img src="<?= base_url('frontend');?>/assets/images/eskul/<?= $eskul[0]['file'];?>" alt="<?= $eskul[0]['file'];?>" style="width:120px;heigth:120px;">
														<input type="file" class="form-control" id="images" name="images">
													</div>

													<div class="form-group">
														<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
													</div>
												<?= form_close() ;?>
											</div>
											<!-- Add Ekstra Kulikuler End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>