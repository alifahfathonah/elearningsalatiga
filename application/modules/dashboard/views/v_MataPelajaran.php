					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Mata Pelajaran</h2>
							</div>
						</div>

						<div class="row" style="margin-bottom:10px;">
							<div class="col-sm-12">
									<a href="<?= base_url('dashboard/addMengajar');?>" class="btn btn-info btn-sm">Tambah</a>
									<a href="<?= base_url('dashboard/cetakMengajar');?>" class="btn btn-info btn-sm" target="_blank">Cetak</a>
							</div>
						</div>

						<div class="row">
						<!-- Table View Mata Pelajaran Start -->
						<div class="col-sm-12">
							<div class="table-responive">
								<table id="tableMapel" class="table table-striped table-bordered table-hover">
										<thead>
												<tr>
														<th class="center">
															No
														</th>
														<th>Nama</th>
														<th>Kelas</th>
														<th>Pengajar</th>
														<th>Deskripsi</th>
														<th>Aksi</th>
												</tr>
										</thead>

										<tbody>
												<tr>
												</tr>
										</tbody>
								</table>
							</div>
						</div>
						<!-- Table View Mata Pelajaran End -->
						</div>
					</div>