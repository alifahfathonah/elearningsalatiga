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
								<li class="list-group-item"><a href="<?= base_url('dashboard/kelas');?>"> Data Kelas</a></li>
								<li class="list-group-item"><a href="<?= base_url('dashboard/mapel');?>"> Data Mata Pelajaran</a></li>
								<li class="list-group-item"><a href="<?= base_url('dashboard/laporan');?>"> Data Laporan Materi</a></li>
								<li class="list-group-item"><a href="<?= base_url('dashboard/sarpra');?>"> Data Sarana Prasarana</a></li>
								<li class="list-group-item"><a href="<?= base_url('dashboard/eksul');?>"> Data Ekstrakulikuler</a></li>
								<li class="list-group-item"><a href="<?= base_url('dashboard/bursa');?>"> Data Bursa Kerja</a></li>
								<li class="list-group-item"><a href="<?= base_url('dashboard/mitrabkk');?>"> Data Mitra BKK</a></li>
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