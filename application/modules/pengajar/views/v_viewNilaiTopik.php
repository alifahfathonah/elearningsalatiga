					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
								<h2>Nilai </h2>
							</div>
						</div>

						<div class="row">
							<!-- Edit Pengajar Start -->
							<div class="col-sm-12">
								<div class="table-responive">
									<table id="tableMateri" class="table table-striped table-bordered table-hover">
										<thead>
											<tr>
												<th class="center">
													No
												</th>
												<th>Nama Siswa</th>
												<th>Topik</th>
												<th>Jawaban Benar</th>
												<th>Jawaban Salah</th>
												<th>Nilai</th>
											</tr>
										</thead>
										<tbody>
										<?php
                                        $no=1;
                                        foreach ($cekTopik as $row) {
                                            ; ?>
										<td><?= $no++ ; ?></td>
										<td><?= $row['nama_lengkap'] ; ?></td>
										<td><?= $row['judul'] ; ?></td>
										<td><?= $row['jml_benar'] ; ?></td>
										<td><?= $row['jml_salah'] ; ?></td>
										<td><?= $row['nilai'] ; ?></td>
										<?php
                                        }
                                        ;?>
											<tr>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- Edit Pengajar End -->

						</div>
					</div>