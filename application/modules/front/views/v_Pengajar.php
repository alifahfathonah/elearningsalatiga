					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
							<h2>Manajemen Pengajar</h2>
							</div>
						</div>

						<div class="row" style="margin-bottom:10px;">
							<div class="col-sm-12">
									<a href="<?= base_url('dashboard/addPengajar');?>" class="btn btn-info btn-sm">Tambah</a>
									<a href="<?= base_url('dashboard/cetakPengajar');?>" class="btn btn-info btn-sm" target="_blank">Cetak</a>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-5">
								<div class="card" style="border:solid;">
									<div class="text-default text-info">
										Account tidak bisa dihapus, tapi bisa di non aktifkan
									</div>
								</div>
							</div>
						</div>

						<div class="row">
						<!-- Table View Pengajar Start -->
						<div class="col-sm-12">
							<div class="table-responive">
								<table id="tablePengajar" class="table table-striped table-bordered table-hover">
										<thead>
												<tr>
														<th class="center">
															No
														</th>
														<th>NIP</th>
														<th>Nama</th>
														<th>Jenis Kelamin</th>
														<th>Blokir</th>
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
						<!-- Table View Pengajar End -->
						</div>
					</div>