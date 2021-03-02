					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Kelas</h2>
							</div>
						</div>

						<div class="row" style="margin-bottom:10px;">
							<div class="col-sm-12">
									<a href="<?= base_url('dashboard/addKelas');?>" class="btn btn-info btn-sm">Tambah</a>
									<a href="<?= base_url('dashboard/cetakKelasDetail');?>" class="btn btn-info btn-sm" target="_blank">Cetak</a>
							</div>
						</div>

						<div class="row">
						<!-- Table View Kelas Detail Start -->
						<div class="col-sm-12">
							<div class="table-responive">
								<table id="tableKelasDet" class="table table-striped table-bordered table-hover" style="width:100%">
										<thead>
												<tr>
														<th class="center">
															No
														</th>
														<th>Nama Kelas</th>
														<th>Guru</th>
														<th>Ketua Kelas</th>
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
						<!-- Table View Kelas Detail End -->
						</div>
					</div>