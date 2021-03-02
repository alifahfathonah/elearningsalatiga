					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h2>Detail Kelas <?= $kelasDet[0]['nama_kelas'] ;?></h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-6">
										Pengajar : <b><?= $pengajar[0]['nama_lengkap'] ;?></b>
									</div>
									<div class="col-sm-6">
										Ketua Kelas : <?= $siswaDet[0]['nama_lengkap'] ;?>
										<input type="text" id="id_kelas" name="id_kelas" value="<?= $siswaDet[0]['id_kelas'] ;?>">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<!-- View Detail Siswa Kelas Start -->
							<div class="col-sm-12">
								<div class="table-responive">
									<table id="tableSiswaDet" class="table table-striped table-bordered table-hover">
											<thead>
													<tr>
															<th class="center">
																No
															</th>
															<th>NIS</th>
															<th>Nama Siswa</th>
															<th>Kelas</th>
															<th>Alamat</th>
															<th>Tempat Lahir</th>
															<th>Tgl Lahir</th>
															<th>Jenis Kelamin</th>
															<th>Agama</th>
															<th>Nama Ayah</th>
															<th>Nama Ibu</th>
															<th>Tahun Masuk</th>
															<th>Email</th>
															<th>Nomor Hp</th>
															<th>Foto</th>
													</tr>
											</thead>

											<tbody>
													<tr>
													</tr>
											</tbody>
									</table>
								</div>
							</div>
							<!-- View Detail Siswa Kelas End -->
						</div>
					</div>