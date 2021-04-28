		<style>
			hr{
				border:solid;
								margin-bottom:-20px;
			}
			.card{
				margin-bottom:5px;
			}
		</style>
		<div class="container-fluid">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3">
						
						<div class="row">
							<div class="col-sm-12 text-center">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12">
												<img src="<?= base_url('frontend') ;?>/assets/images/logo/logo.png" alt="logo.png" style="width:150px;heigth:150px;">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<ul class="list-group list-group-flush">
								<center>
									Siswa Waktu Anda <br>
									<span>
										<div id="h_timer"></div>
									</span>
									<?php
                                                                        // Cek Siswa Waktu
                                                                                                                                                                                                                                                                                                $sisa_waktu	= explode(":", $waktu_selesai);
                                    ;?>
									<input type="hidden" id="jam" value="<?= $sisa_waktu[0];?>">
									<input type="hidden" id="menit" value="<?= $sisa_waktu[1];?>">
									<input type="hidden" id="detik" value="<?= $sisa_waktu[2];?>">
									<!-- <input type="hidden" id="jam" value="00">
									<input type="hidden" id="menit" value="00">
									<input type="hidden" id="detik" value="02"> -->
								</center>
							</ul>
						</div>
					</div>