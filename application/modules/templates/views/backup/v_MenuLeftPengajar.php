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
						
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-center">Assalamualaikum</h5>
								<hr>
							</div>
							<div class="card-body">
								<p class="card-text">Selamat <?= salam() ;?>,<b> <?= $this->session->userdata('username') ;?></b>.</p>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-center">Menu Utama</h5>
								<hr>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><a href="<?= base_url('pengajar/kelas');?>"> Data Kelas</a></li>
								<li class="list-group-item"><a href="<?= base_url('pengajar/mapel');?>"> Data Mata Pelajaran</a></li>
								<li class="list-group-item"><a href="<?= base_url('pengajar/materi');?>"> Data Materi</a></li>
								<li class="list-group-item"><a href="<?= base_url('pengajar/quis');?>"> Data Quis</a></li>
								<li class="list-group-item"><a href="<?= base_url('pengajar/laporan');?>"> Data Laporan Nilai</a></li>
							</ul>
						</div>
						
						<div class="card">
							<div class="card-body">
								<h5 class="card-title text-center">Informasi</h5>
								<hr>
								<br>
								<span>Anda Masih Dalam Keadaan Login Sebagai : <?= $this->session->userdata('username') ;?>. <br> Jangan Lupa Logout Sebelum Meninggalkan Website Ini</span>
							</div>
						</div>
					</div>