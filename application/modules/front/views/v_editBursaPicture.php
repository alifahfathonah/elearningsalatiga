					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Bursa Kerja Picture</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<?= validation_errors(); ?>
							</div>

							<!-- Edit Bursa Kerja Picture Start -->
							<div class="col-sm-12">
								<?= form_open_multipart('Dashboard/actionEditBursaPic/'.$bursaPic[0]['id_bursa_pic']);?>

									<div class="form-group">
										<label for="keterangan">Keterangan</label>
										<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $bursaPic[0]['keterangan'];?>" autofocus>
									</div>

									<div class="form-group">
										<img src="<?= base_url('frontend');?>/assets/images/bursa/<?= $bursaPic[0]['file'];?>" alt="<?= $bursaPic[0]['file'];?>" style="width:150px;heigth:150px">
										<input type="file" class="form-control" id="imagesEdit" name="imagesEdit">
									</div>

									<div class="form-group">
										<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
									</div>
								<?= form_close() ;?>
							</div>
							<!-- Edit Bursa Kerja Picture End -->
						</div>
					</div>