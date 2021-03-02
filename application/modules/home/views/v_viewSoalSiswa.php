					<div class="col-sm-9">
						<div class="row">
							<!-- View Materi Siswa Start -->
							<div class="col-sm-12">
								Soal <b><?= $topik[0]['judul'] ;?></b>
							</div>
							<br><br><br>
							<!-- View Materi Siswa End -->

							<!-- View Materi Siswa Start -->
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-3">
												Pelajaran
											</div>
											<div class="col-sm-9">
												<?= $topik[0]['mapel'] ;?>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-3">
												Kelas
											</div>
											<div class="col-sm-9">
												<?= $topik[0]['nama_kelas'] ;?>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-3">
												Waktu Mengerjakan
											</div>
											<div class="col-sm-9">
												<?= $topik[0]['waktu_mengerjakan'] ;?>
											</div>
										</div>
									</div>
								</div>

								<br><br><br>
								<div class="row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-12">
												<center>
													<a href="<?= base_url('Home/mengerjakanQuiz/'.$topik[0]['id_tq']);?>" class="btn btn-info btn-lg">Mulai Mengerjakan</a>
												</center>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- View Materi Siswa End -->
						</div>
					</div>
					</div>
					<a href="<?= base_url('home');?>" class="btn btn-outline-dark">Kembali</a>