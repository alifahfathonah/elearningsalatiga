					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-12">
								<h2>Ganti Password</h2>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<?= validation_errors(); ?>
							</div>
							<!-- Edit Password Siswa Start -->
							<div class="col-sm-12">
								<?= form_open_multipart('Home/actionEditPassword');?>
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Login Pengajar ..." value="<?= $user[0]['username_login'];?>" disabled>
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