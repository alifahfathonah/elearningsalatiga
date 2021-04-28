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
												<h2>Manajemen Mata Pelajaran</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>

											<!-- Add Mata Pelajaran Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Dashboard/actionEditMapel/'.$viewMapelDet[0]['id_mengajar']);?>

													<div class="form-group">
														<label for="mapel">Mata Pelajaran</label>
														<select class="form-control" name="mapel" id="mapel">
															<?php
															foreach ($mapel as $row) {
																if ($viewMapelDet[0]['nama']==$row['id_mapel']) {
																	$SELECTED 	= 'SELECTED';
																} else {
																	$SELECTED 	= '';
																}
																; ?>
															<option value="<?= $row['id_mapel']; ?>" <?= $SELECTED ; ?>><?= $row['mapel'] ; ?></option>
															<?php
															};?>
														</select>
													</div>

													<div class="form-group">
														<label for="kelas">Kelas</label>
														<select class="form-control" name="kelas" id="kelas">
															<?php
															foreach ($kelas as $row) {
																if ($viewMapelDet[0]['id_kelas']==$row['id_kelas']) {
																	$SELECTED 	= 'SELECTED';
																} else {
																	$SELECTED 	= '';
																}
																; ?>
															<option value="<?= $row['id_kelas']; ?>" <?= $SELECTED ; ?>><?= $row['keterangan'] ; ?></option>
															<?php
															};?>
														</select>
													</div>

													<div class="form-group">
														<label for="pengajar">Pengajar</label>
														<select class="form-control" name="pengajar" id="pengajar">
															<?php
															foreach ($pengajar as $row) {
																if ($viewMapelDet[0]['id_pengajar']==$row['id_pengajar']) {
																	$SELECTED 	= 'SELECTED';
																} else {
																	$SELECTED 	= '';
																}
																; ?>
															<option value="<?= $row['id_pengajar']; ?>" <?= $SELECTED ; ?>><?= $row['nama_lengkap'] ; ?></option>
															<?php
															};?>
														</select>
													</div>

													<div class="form-group">
														<label for="deskripsi">Deskripsi</label>
														<input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $viewMapelDet[0]['deskripsi'];?>" autofocus>
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