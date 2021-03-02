					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Add Materi</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<?= validation_errors(); ?>
							</div>
							<!-- Edit Pengajar Start -->
							<div class="col-sm-12">
								<?= form_open_multipart('Pengajar/actionAddMateri');?>
									<div class="form-group">
										<label for="judul">Judul Materi</label>
										<input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Materi ..." autofocus required>
									</div>

									<div class="form-group">
										<label for="kelas">Kelas :</label>
										<select class="form-control" id="kelas" name="kelas">
											<?php
                                            foreach ($kelas as $row) {
                                                ; ?>
												<option value="<?= $row['id_kelas']; ?>"><?= $row['keterangan']; ?></option>
											<?php
                                            }
                                            ;?>
										</select>
									</div>

									<div class="form-group">
										<label for="mapel">Mata Pelajaran :</label>
										<select class="form-control" id="mapel" name="mapel">
											<?php
                                            foreach ($mapel as $row) {
                                                ; ?>
												<option value="<?= $row['id_mapel']; ?>"><?= $row['mapel']; ?></option>
											<?php
                                            }
                                            ;?>
										</select>
									</div>

									<div class="form-group">
										<label for="images">File Materi</label>
										<input type="file" class="form-control" id="document" name="document">
									</div>

									<div class="form-group">
										<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
									</div>
								<?= form_close() ;?>
							</div>
							<!-- Edit Pengajar End -->
						</div>
					</div>