			<style>
				.switch {
					position: relative;
					display: block;
					vertical-align: top;
					width: 100px;
					height: 30px;
					padding: 3px;
					margin: 0 10px 10px 0;
					background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
					background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
					border-radius: 18px;
					box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
					cursor: pointer;
				}
				.switch-input {
					position: absolute;
					top: 0;
					left: 0;
					opacity: 0;
				}
				.switch-label {
					position: relative;
					display: block;
					height: inherit;
					font-size: 10px;
					text-transform: uppercase;
					background: #eceeef;
					border-radius: inherit;
					box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
				}
				.switch-label:before, .switch-label:after {
					position: absolute;
					top: 50%;
					margin-top: -.5em;
					line-height: 1;
					-webkit-transition: inherit;
					-moz-transition: inherit;
					-o-transition: inherit;
					transition: inherit;
				}
				.switch-label:before {
					content: attr(data-off);
					right: 11px;
					color: #aaaaaa;
					text-shadow: 0 1px rgba(255, 255, 255, 0.5);
				}
				.switch-label:after {
					content: attr(data-on);
					left: 11px;
					color: #FFFFFF;
					text-shadow: 0 1px rgba(0, 0, 0, 0.2);
					opacity: 0;
				}
				.switch-input:checked ~ .switch-label {
					background: #E1B42B;
					box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
				}
				.switch-input:checked ~ .switch-label:before {
					opacity: 0;
				}
				.switch-input:checked ~ .switch-label:after {
					opacity: 1;
				}
				.switch-handle {
					position: absolute;
					top: 4px;
					left: 4px;
					width: 28px;
					height: 28px;
					background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
					background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
					border-radius: 100%;
					box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
				}
				.switch-handle:before {
					content: "";
					position: absolute;
					top: 50%;
					left: 50%;
					margin: -6px 0 0 -6px;
					width: 12px;
					height: 12px;
					background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
					background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
					border-radius: 6px;
					box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
				}
				.switch-input:checked ~ .switch-handle {
					left: 74px;
					box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
				}
				
				/* Transition
				========================== */
				.switch-label, .switch-handle {
					transition: All 0.3s ease;
					-webkit-transition: All 0.3s ease;
					-moz-transition: All 0.3s ease;
					-o-transition: All 0.3s ease;
				}
			</style>
			<!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div id="isi">
										<div class="row">
											<div class="col-sm-12">
												<h2>Manajemen Siswa</h2>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<?= validation_errors(); ?>
											</div>
											<!-- Add Siswa Start -->
											<div class="col-sm-12">
												<?= form_open_multipart('Dashboard/actionEditiswa/'.$viewSiswa[0]['id_siswa']);?>
													<div class="form-group">
														<label for="nis">Nomor Induk Siswa</label>
														<input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan Nomor Induk Siswa ..." onkeydown="onlyNumbers(event)" onpaste="onlyNumbers(event)" value="<?= $viewSiswa[0]['nis'];?>" disabled>
													</div>

													<div class="form-group">
														<label for="nama_lengkap">Nama Lengkap Siswa</label>
														<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Siswa ..." value="<?= $viewSiswa[0]['nama_lengkap'];?>">
													</div>

													<div class="form-group">
														<label for="username">Username</label>
														<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Login Siswa ..." value="<?= $viewSiswa[0]['username_login'];?>">
													</div>

													<div class="form-group">
														<label for="password">Password</label>
														<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Login Siswa ...">
													</div>

													<div class="form-group">
														<label for="kelas">Kelas <?= $viewSiswa[0]['id_kelas'] ;?></label>
														<select class="form-control" id="kelas" name="kelas">
														<?php
														foreach ($kelas as $row) {
															if ($viewSiswa[0]['id_kelas']==$row['id_kelas']) {
																$selected	= 'SELECTED';
															} else {
																$selected	= '';
															}
															; ?>
															<option value="<?= $row['id_kelas']; ?>" <?= $selected ; ?>><?= $row['keterangan']; ?></option>
														<?php
														}
														;?>
														</select>
													</div>

													<div class="form-group">
														<label for="alamat">Alamat</label>
														<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Siswa ..." value="<?= $viewSiswa[0]['alamat'];?>">
													</div>

													<div class="form-group">
														<label for="tempat_lahir">Tempat Lahir</label>
														<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Siswa ..." value="<?= $viewSiswa[0]['tempat_lahir'];?>">
													</div>

													<div class="form-group">
														<label for="tgl_lahir">Tanggal Lahir</label>
														<input type="text" class="form-control datepicker" id="tgl_lahir" name="tgl_lahir" autocomplete="off" onkeydown="return false" value="<?= tgl_indo($viewSiswa[0]['tgl_lahir']);?>">
													</div>

													<div class="form-group">
														<label for="tgl_lahir">Jenis Kelamin :</label>
														<input type="radio" id[]="jenkel" name="jenkel" value="<?php
														if ($viewSiswa[0]['jenis_kelamin']=="Laki - Laki") {
															$checked	= 'checked';
														} else {
															$checked	= '';
														}
																								echo 'Laki - Laki';?>" <?= $checked ;?> >Laki - Laki
														<input type="radio" id[]="jenkel" name="jenkel" value="<?php
														if ($viewSiswa[0]['jenis_kelamin']=="Perempuan") {
															$checked	= 'checked';
														} else {
															$checked	= '';
														}
																								echo 'Perempuan';?>" <?= $checked ;?>>Perempuan
													</div>

													<div class="form-group">
														<label for="tgl_lahir">Agama :</label>
														<select class="form-control" id="agama" name="agama">
														<?php
														foreach ($agama as $row) {
															if ($viewSiswa[0]['agama']==$row['id_agama']) {
																$selected	= 'SELECTED';
															} else {
																$selected	= '';
															}; ?>
															<option value="<?= $row['id_agama']; ?>" <?= $selected ; ?>><?= $row['keterangan']; ?></option>
														<?php
														}
														;?>
														</select>
													</div>

													<div class="form-group">
														<label for="nama_ayah">Nama Ayah</label>
														<input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah Siswa ..." value="<?= $viewSiswa[0]['nama_ayah'];?>">
													</div>

													<div class="form-group">
														<label for="nama_ibu">Nama Ibu</label>
														<input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu Siswa ..." value="<?= $viewSiswa[0]['nama_ibu'];?>">
													</div>

													<div class="form-group">
														<label for="thn_masuk">Tahun Masuk</label>
														<input type="text" class="form-control" id="thn_masuk" name="thn_masuk" maxlength="4" onkeydown="onlyNumbers(event)" onpaste="onlyNumbers(event)" placeholder="Masukkan Tahun Masuk ..." value="<?= $viewSiswa[0]['th_masuk'];?>">
													</div>

													<div class="form-group">
														<label for="email">Email</label>
														<input type="email" class="form-control" id="email" name="email"  placeholder="Masukkan Email Siswa" value="<?= $viewSiswa[0]['email'];?>">
													</div>

													<div class="form-group">
														<label for="no_telp">Nomor Telephone</label>
														<input type="text" class="form-control" id="no_telp" name="no_telp" onkeydown="onlyNumbers(event)" onpaste="onlyNumbers(event)" placeholder="Masukkan Nomor Telephone Siswa ..." value="<?= $viewSiswa[0]['no_telp'];?>">
													</div>

													<div class="form-group">
														<label for="images">Foto</label>
														<input type="file" class="form-control" id="images" name="images">
													</div>

													<label for="blokir">Blokir Akun</label>
													<label class="switch">
														<input class="switch-input" type="checkbox" id="blokir" name="blokir"/>
														<span class="switch-label" data-on="Yes" data-off="No"></span> 
														<span class="switch-handle"></span> 
														<input type="hidden" id="blok" name="blok" value="<?= $viewSiswa[0]['blokir'];?>">
													</label>

													<div class="form-group">
														<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
													</div>
												<?= form_close() ;?>
											</div>
											<!-- Add Siswa End -->
										</div>
									</div>
								</div>
							</div>                  
                        </div>
                    </div>
                </div>