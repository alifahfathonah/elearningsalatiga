					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Kelas</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<?= validation_errors(); ?>
							</div>
							<!-- Edit Administrator Start -->
							<div class="col-sm-12">
								<?= form_open_multipart('Dashboard/actionEditKelas/'.$viewKelasDet[0]['id_kelas_detail']);?>

									<div class="form-group">
										<label for="kelas">Kelas</label>
										<select class="form-control" name="kelas" id="kelas">
											<?php
                                            foreach ($kelas as $row) {
                                                if ($viewKelasDet[0]['kelas']==$row['id_kelas']) {
                                                    $selected 	= 'SELECTED';
                                                } else {
                                                    $selected		= '';
                                                }
                                                ; ?>
											<option value="<?= $row['id_kelas']; ?>" <?= $selected ; ?>><?= $row['keterangan'] ; ?></option>
											<?php
                                            };?>
										</select>
									</div>

									<div class="form-group">
										<label for="kelas">Wali Kelas</label>
										<select class="form-control" name="pengajar" id="pengajar">
											<?php
                                            foreach ($pengajar as $row) {
                                                if ($viewKelasDet[0]['wali_kelas']==$row['id_pengajar']) {
                                                    $selected 	= 'SELECTED';
                                                } else {
                                                    $selected		= '';
                                                }
                                                ; ?>
											<option value="<?= $row['id_pengajar']; ?>"><?= $row['nama_lengkap'] ; ?></option>
											<?php
                                            };?>
										</select>

										<div class="form-group">
										<label for="kelas">Ketua Kelas</label>
										<select class="form-control" name="siswa" id="siswa">
											<?php
                                            foreach ($siswa as $row) {
                                                if ($viewKelasDet[0]['ketua_kelas']==$row['id_siswa']) {
                                                    $selected 	= 'SELECTED';
                                                } else {
                                                    $selected		= '';
                                                }
                                                ; ?>
											<option value="<?= $row['id_siswa']; ?>" <?= $selected ; ?>><?= $row['nama_lengkap'] ; ?></option>
											<?php
                                            };?>
										</select>
									</div>

									<div class="form-group">
										<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
									</div>
								<?= form_close() ;?>
							</div>
							<!-- Edit Administrator End -->
						</div>
					</div>