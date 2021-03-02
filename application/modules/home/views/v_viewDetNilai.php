					<div class="col-sm-9">
						<div class="row">
							<!-- View Nilai Siswa Start -->
							<div class="col-sm-12">
								<center>
									Detail Nilai <b><?= $nilai[0]['judul'] ;?></b>
								</center>
							</div>
							<br><br>
							<!-- View Nilai Siswa End -->

							<!-- View Nilai Siswa Start -->
							<div class="col-sm-12">
								
								<div class="row">
									<div class="col-sm-6">
										Jawaban Benar
									</div>
									<div class="col-sm-6">
										<?= $nilai[0]['jml_benar'] ;?>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										Jawaban Kosong
									</div>
									<div class="col-sm-6">
										<?= $nilai[0]['jml_kosong'] ;?>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										Jawaban Salah
									</div>
									<div class="col-sm-6">
										<?= $nilai[0]['jml_salah'] ;?>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										Nilai
									</div>
									<div class="col-sm-6">
										<?= $nilai[0]['nilai'] ;?>
									</div>
								</div>
							</div>
							<!-- View Nilai Siswa End -->
						</div>
					</div>
					</div>