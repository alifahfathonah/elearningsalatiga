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
										<div class="col-sm-12">
										<?= validation_errors(); ?>
									</div>
									<!-- Edit Password Siswa Start -->
									<div class="col-sm-12">
										<?= form_open_multipart('Home/actionEditPassword');?>
											<div class="form-group">
												<label for="nis">NIS</label>
												<input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan Username Login Pengajar ..." value="<?= $user[0]['nis'];?>" disabled>
											</div>

											<div class="form-group">
												<label for="nama">Nama Lengkap</label>
												<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Username Login Pengajar ..." value="<?= $user[0]['nama_lengkap'];?>" disabled>
											</div>

											<div class="form-group">
												<label for="password">Password</label>
												<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password Login Pengajar ..." autofocus>
											</div>

											<div class="form-group">
												<input type="submit" class="btn btn-success btn-sm" value="Submit"/>
											</div>
										<?= form_close() ;?>
									</div>
									<!-- Edit Password Siswa End -->
                                </div>  
                            </div>
                        </div>                  
                        </div>
                    </div>
                </div>