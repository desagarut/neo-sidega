<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="pcoded-main-container">
	<div class="pcoded-content">

		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row class-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Pengelolaan SPPT <?= ucwords($this->setting->sebutan_desa) ?> <?= $desa["nama_desa"]; ?></h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= site_url('beranda') ?>"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Pertanahan</a></li>
							<li class="breadcrumb-item"><a href="#!">Panduan SPPT</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<!-- Start Menu -->
				<?php $this->load->view('data_sppt/menu.php') ?>
				<!-- end Menu -->
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h4>Keterangan</h4>
				<p><strong>Modul Data SPPT PBB</strong> adalah modul untuk pengelolaan data tentang kepemilikan lahan, termasuk riwayat kepemilikan.</p>
				<h4>Panduan</h4>
				<p>Secara garis besar, proses pengisian data SPPT PBB adalah sebagai berikut:</p>
				<p>
				<ol>
					<li>Buat <strong>SPPT PBB</strong>
						<p>Buat satu SPPT PBB untuk setiap penduduk yang akan dicatat kepemilikan lahannya. Setiap SPPT PBB digunakan untuk mencatat semua kepemilikan lahan penduduk tersebut.</p>
					</li>
					<li>Buat <strong>Persil</strong>
						<p>Persil berisi keterangan lahan yang dimiliki penduduk dan dicatat dalam SPPT PBB pemilik. Beberapa pemilik bisa mempunyai lahan di persil yang sama. Beberapa persil dapat mempunyai Nomor Persil yang sama. Untuk membedakan, isi juga Nomor Urut Bidang yang unik untuk Persil ybs. Pemilik awal suatu persil dicatat dengan masukkan SPPT PBB pemilik ybs.</p>
					</li>
					<li>Buat <strong>Mutasi Persil</strong>
						<p>Buat mutasi untuk setiap pergantian kepemilikan suatu lahan. Mutasi dapat dilakukan untuk sebagian dari luas suatu persil.</p>
					</li>
				</ul>
				</p>
			</div>
		</div>
		</form>
	</div>
</div>