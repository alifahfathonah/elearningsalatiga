            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h3> <b>Dashboard</b> <small class="text-muted"></small></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
										<div class="row">
											<div class="col-sm-12">
											<h2>Manajemen Administrator</h2>
											</div>
										</div>

										<div class="row" style="margin-bottom:10px;">
											<div class="col-sm-12">
													<a href="<?= base_url('dashboard/addAdministrator');?>" class="btn btn-info btn-sm">Tambah</a>
													<a href="<?= base_url('dashboard/cetakAdministrator');?>" class="btn btn-info btn-sm" target="_blank">Cetak</a>
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
										<!-- Table View Administrator Start -->
										<div class="col-sm-12">
											<div class="table-responive">
												<table id="tableAdministrator" class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th class="center">
																No
															</th>
															<th>Username</th>
															<th>Nama</th>
															<th>Alamat</th>
															<th>Nomor Telphone</th>
															<th>Email</th>
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
										<!-- Table View Administrator End -->
										</div>
									</div>  
								</div>
							</div>                  
                        </div>
                    </div>
                </div>