					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Mata Pelajaran</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<?= validation_errors(); ?>
							</div>

							<!-- Add Sarana Prasarana Start -->
							<div class="col-sm-12">
								<?= form_open_multipart('Dashboard/actionAddSarpra');?>

									<div class="form-group">
										<label for="keterangan">Keterangan</label>
										<input type="text" class="form-control" id="keterangan" name="keterangan" autofocus>
									</div>

									<div class="form-group">
										<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
									</div>
								<?= form_close() ;?>
							</div>
							<!-- Add Sarana Prasarana End -->
						</div>
					</div>