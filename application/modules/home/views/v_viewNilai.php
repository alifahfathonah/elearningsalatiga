            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h3> <b><?= $subbread ;?></b> <small class="text-muted"></small></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
                                        <div class="row">
                                            <!-- View Nilai Siswa Start -->
                                            <div class="col-sm-12">
                                                Nilai
                                            </div>
                                            <br><br>
                                            <!-- View Nilai Siswa End -->

                                            <!-- View Nilai Siswa Start -->
                                            <div class="col-sm-12">
                                                <?php
                                                foreach ($nilai as $data) {
                                                    ; ?>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                    Lihat Nilai <a href="../home/detNilai/<?= $data['id_nilai'] ; ?>"><?= $data['judul'] ; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                                ;?>
                                            <!-- View Nilai Siswa End -->
                                        </div>
									</div>  
								</div>
							</div>                  
                        </div>
                    </div>
                </div>