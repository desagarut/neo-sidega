<style type="text/css">
	.nowrap { white-space: nowrap; }
</style>
<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h5 class="m-b-10">Laporan Keuangan</h5>
		<ul class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('keuangan/laporan')?>">Laporan Keuangan</a></li>
			<li class="active">Grafik Pelaksanaan Belanja Desa</li>
		</ul>
	</div>
	<div class="card">
		<div class="row">
			<?php $this->load->view('keuangan/filter_laporan', array('data' => $tahun_anggaran)); ?>
			<div class="col-md-9">
				<?php include("donjo-app/views/keuangan/grafik_rp_apbd_chart.php"); ?>
			</div>
		</div>
	</div>
</div>
