					<div class="col-sm-9">
						<div class="row">
							<!-- View Detail Profile Pengajar Start -->
							<div class="col-sm-12">
								Daftar File Materi
							</div>
							<br><br><br>
							<!-- View Detail Profile Pengajar  End -->

							<!-- View Kelola Kelas Pengajar  Start -->
							<div class="col-sm-12">
							<?php
                            foreach ($viewMateri as $row) {
                                ; ?>
								<div class="row">
									<div class="col-sm-1">
										<?php if ($this->uri->segment('4')=='') {
                                    echo '1';
                                } else {
                                    echo $this->uri->segment('4')+1;
                                }; ?>
									</div>
									<div class="col-sm-2">
										<img src="<?= base_url('frontend'); ?>/assets/materi/pdf.jpg" alt="pdf.jpg" style="width:120px;heigth:120px;padding:0px;margin-left:-40px;">
									</div>
									<div class="col-sm-9">
										<div class="row">
											<div class="col-sm-12">
												<div class="row" style="margin-bottom:10px;">
													<div class="col-sm-5">
														Judul
													</div>
													<div class="col-sm-1">
														:
													</div>
													<div class="col-sm-6">
														<?= $row['judul'] ; ?>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="row" style="margin-bottom:10px;">
													<div class="col-sm-5">
														Nama File
													</div>
													<div class="col-sm-1">
														:
													</div>
													<div class="col-sm-6">
														<?= $row['nama_file'] ; ?>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="row" style="margin-bottom:10px;">
													<div class="col-sm-5">
														Tanggal Posting
													</div>
													<div class="col-sm-1">
														:
													</div>
													<div class="col-sm-6">
														<?= tgl_indo($row['tgl_posting']) ; ?>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="row">
													<div class="col-sm-6">
														<a href="<?= base_url('home/download/'.$row['id_materi']); ?>" class="btn btn-outline-dark">Download File</a>
														<a href="" class="btn btn-outline-dark">Download <?= $row['hits'] ; ?> Kali</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<?php
                            }
                            ;?>
							<!-- View Kelola Kelas Pengajar End -->
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12">
							<?= $pagination; ?>
						</div>
					</div>
					<a href="<?= base_url('home');?>" class="btn btn-outline-dark">Kembali</a>