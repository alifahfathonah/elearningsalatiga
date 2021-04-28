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
												<h2>Manajemen Srana Prasarana</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>

											<!-- Add Mata Pelajaran Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Dashboard/actionEditSrapa/'.$srapra[0]['id_prasara']);?>

													<div class="form-group">
														<label for="keterangan">Keterangan</label>
														<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $srapra[0]['keterangan'];?>" autofocus>
													</div>

													<div class="form-group">
														<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
													</div>
												<?= form_close() ;?>
											</div>
											<!-- Add Mata Pelajaran End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>