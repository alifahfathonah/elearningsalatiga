					<div class="col-sm-9">
						<div class="row">
							<!-- View Materi Siswa Start -->
							<div class="col-sm-12">
								<center>
									<h2><b><?= $topik[0]['judul'] ;?></b></h2>
								</center>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								Daftar Soal Pilihan Ganda
							</div>
						</div>
						<?= form_open_multipart('Home/actionSelesaiQuis/'.$soal[0]['id_tq']);?>
						<?php
                        $no = 1;
                        foreach ($soal as $row) {
                            ; ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="judul"><?= $no++; ?> . <?= $row['soal'] ; ?></label>
											<input type="hidden" id="jmlh[]" name="jmlh[]" value="ok">
											<input type="hidden" id="soal_<?=$no; ?>" name="soal_<?=$no; ?>" value="<?= $row['id_soal'] ; ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<input type="radio" id="pilihan_<?=$no; ?>" name="pilihan_<?=$no; ?>" value="1"> <?= $row['pilihan_1']; ?>
												</div>
												<div class="col-sm-6">
													<input type="radio" id="pilihan_<?=$no; ?>" name="pilihan_<?=$no; ?>" value="2"> <?= $row['pilihan_2']; ?>
												</div>
												<div class="col-sm-6">
													<input type="radio" id="pilihan_<?=$no; ?>" name="pilihan_<?=$no; ?>" value="3"> <?= $row['pilihan_3']; ?>
												</div>
												<div class="col-sm-6">
													<input type="radio" id="pilihan_<?=$no; ?>" name="pilihan_<?=$no; ?>" value="4"> <?= $row['pilihan_4']; ?>
												</div>
												<div class="col-sm-6">
													<input type="radio" id="pilihan_<?=$no; ?>" name="pilihan_<?=$no; ?>" value="5"> <?= $row['pilihan_5']; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									
								</div>
								<?php
                        }
                                            ;?>
								<hr>
								<br>
								<div class="row">
									<div class="col-sm-12">
										<B>SOAL ESSAY</B>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										Pertanyaan = <?= $soalEssay[0]['isi_soal']  ;?>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<input type="text" class="form-control" id="isiEssay" name="isiEssay" autofocus>
										<input type="hidden" class="form-control" id="id_essay" name="id_essay" value="<?=$soalEssay[0]['id_soal_essay'];?>">
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
										</div>
									</div>
								</div>
								<!-- Disini Untuk Soal Essay Nantinya -->
								<?= form_close() ;?>
							</div>
						</div>
					</div>