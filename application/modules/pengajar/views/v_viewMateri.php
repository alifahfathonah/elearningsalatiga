					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Daftar Materi Yang Anda Upload</h2>
							</div>
						</div>

						<div class="row" style="margin-bottom:10px;">
							<div class="col-sm-12">
									<a href="<?= base_url('pengajar/addMateri');?>" class="btn btn-info btn-sm">Tambah Materi</a>
							</div>
						</div>

						<div class="row">
						<!-- Table View Mata Pelajaran Start -->
						<div class="col-sm-12">
							<div class="table-responive">
								<table id="tableMateri" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
												No
											</th>
											<th>Judul</th>
											<th>Kelas</th>
											<th>Pelajaran</th>
											<th>Nama File</th>
											<th>Tanggal Upload</th>
											<th>Hits</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<tbody>
									</tbody>
								</table>
							</div>
						</div>
						<!-- Table View Mata Pelajaran End -->
					</div>
				</div>