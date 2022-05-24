<style type="text/css">
	.nowrap { white-space: nowrap; }
</style>
<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h1>Laporan Keuangan</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('keuangan_manual/laporan_manual')?>">Laporan Keuangan</a></li>
			<li class="active">Grafik Pelaksanaan Belanja Desa</li>
		</ol>
	</div>
	<div class="card">
		<div class="row">
			<?php $this->load->view('keuangan/filter_laporan_manual', array('data' => $tahun_anggaran)); ?>
			<div class="col-md-9">
				<?php include("donjo-app/views/keuangan/grafik_rp_apbd_chart.php"); ?>
			</div>
		</div>
	</div>
</div>
