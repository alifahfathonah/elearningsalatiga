					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
								<h2>Jawaban <?= $siswa[0]['nama_lengkap'] ;?></h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="table-responive">
									<table id="tableKoreksiSoal" class="table table-striped table-bordered table-hover" style="width:100%">
										<thead>
											<tr>
												<th class="center">
													No
												</th>
												<th>Ujian</th>
												<th>Soal</th>
												<th>Jawaban</th>
												<th>Penilaian</th>
											</tr>
										</thead>
										<tbody>
											
											<?php
                                                                                        $no=1;
                                                                                        $benar = 0;
                                                                                        $salah = 0;
                                            foreach ($analisis as $data) {
                                                ; ?>
										<tr>
												<td><?= $no++ ; ?></td>
												<td><?= $data['judul'] ; ?></td>
												<td><?= $data['nama_soal'] ; ?></td>
												<td>
													<?php foreach ($soal as $row1) {
                                                    $pilihan =	'pilihan_'.$data['jawaban'];
                                                    echo $row1[$pilihan];
                                                } ; ?>
												</td>
												<td>
													<?php
                                                    foreach ($soal as $row) {
                                                        if ($row['jawaban']==$data['jawaban']) {
                                                            echo '<font color=green>Jawaban Benar</font>';
                                                            $benar++;
                                                        } else {
                                                            echo '<font color=red>Jawaban Salah</font>';
                                                            $salah++;
                                                        }
                                                    }
                                                    ; ?>
												</td>
										</tr>
											<?php
                                            }
                                            ;?>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<hr>
						<br>

						<div class="row">
							<div class="col-sm-12">
								Jawaban Soal Essay
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								Soal : <?=$analisis_essay[0]['nama_soal_essay'] ;?>
							</div>
							<div class="col-sm-6">
								Jawaban <?=$analisis_essay[0]['jawaban_essay'] ;?>
							</div>
						</div>
						
						<hr>
						<br>

						<div class="row">
							<div class="col-sm-12">
								<?= form_open_multipart('Pengajar/prosesNilai/'.$this->uri->segment('3').'/'.$this->uri->segment('4'));?>
									<div class="row">
										<div class="col-sm-6">
											Total Soal
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" placeholder="<?= $no-1 ;?>" readonly>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											Jawaban Benar
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="benar" name="benar" value="<?= $benar ;?>" readonly>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											Jawaban Salah
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="salah" name="salah" value="<?= $salah ;?>" readonly>
										</div>
									</div>
										<?php
                                    if ($nilai[0]['nilai']==0) {
                                        ; ?>
									<div class="row">
										<div class="col-sm-6">
											Nilai Essay
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="essay" name="essay" onkeydown="onlyNumbers(event)" onpaste="onlyNumbers(event)" maxlength="3" autofocus>
										</div>
									</div>
									<?php
                                    } ;?>
									<div class="row">
										<div class="col-sm-6">
											Total Nilai
										</div>
										<div class="col-sm-6">
											<input type="text" class="form-control" id="nilai" name="nilai" value="<?= $nilai[0]['nilai'] ;?>" readonly>
										</div>
									</div>

									<?php
                                    if ($nilai[0]['nilai']==0) {
                                        ; ?>
									<div class="form-group">
										<input type="submit" class="btn btn-success btn-sm" value="Proses Nilai"/>
									</div>
									<?php
                                    }
                                    ;?>
							</div>
						</div>
					</div>