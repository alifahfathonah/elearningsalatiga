					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
								<h2>Daftar Soal Quis <i> <?= $topik[0]['mapel'] ;?></i></h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-1">
										Judul
									</div>
									<div class="col-sm-9">
										<b><?= $topik[0]['judul'] ;?></b>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-2">
												Kelas
											</div>
											<div class="col-sm-4">
												<?= $topik[0]['nama_kelas'] ;?>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-4">
												Mata Pelajaran
											</div>
											<div class="col-sm-6">
												<?= $topik[0]['mapel'] ;?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
						<!-- Table View Kelas Detail Start -->
						<div class="col-sm-12">
							<div class="table-responive">
								<table id="tableQuisList" class="table table-striped table-bordered table-hover" style="width:100%">
									<thead>
										<tr>
											<th class="center">
												No
											</th>
											<th>Soal</th>
											<th>Pilihan A</th>
											<th>Pilihan B</th>
											<th>Pilihan C</th>
											<th>Pilihan D</th>
											<th>Pilihan E</th>
											<th>Jawaban</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<tbody>
									</tbody>
								</table>
							</div>
						</div>
						<!-- Table View Kelas Detail End -->
						</div>
					</div>