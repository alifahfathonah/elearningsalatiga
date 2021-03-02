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
							<div class="card-body">
								<h5 class="card-title text-center">Menu Siswa</h5>
								<hr>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><a href="<?= base_url('home/materi');?>"> Materi</a></li>
								<li class="list-group-item"><a href="<?= base_url('home/quis');?>"> Quiz</a></li>
								<li class="list-group-item"><a href="<?= base_url('home/nilai');?>"> Nilai</a></li>
							</ul>
						</div>
						
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-center">Data Akun</h5>
								<hr>
								<br>
								<span><a href="<?= base_url('home/editPassword');?>"> Edit Password</a></span>
							</div>
						</div>
					</div>