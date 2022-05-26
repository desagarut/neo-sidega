<?php	$this->load->view('header', $this->header); ?>
<?php	$this->load->view('nav'); ?>

<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h5 class="m-b-10">Pengaturan Database</h5>
		<ul class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Pengaturan Database</li>
		</ul>
	</div>
	<div class="card">
		<div class="row">
			<div class="col-md-12">
					
						<div class="card-body">
								<div class="row">
									<div class="col-xs-12">
											<div class="nav-tabs-custom">
												<ul class="nav nav-tabs">
													<li <?php if ($act_tab==1): ?>class="active"<?php endif ?>><a href="<?= site_url('database')?>">Ekspor Database</a></li>
													<li <?php if ($act_tab==2): ?>class="active"<?php endif ?>><a href="<?= site_url('database/import')?>">Impor Database</a></li>
													<li <?php if ($act_tab==4): ?>class="active"<?php endif ?>><a href="<?= site_url('database/backup')?>">Backup/Restore</a></li>
													<!--<li <?php if ($act_tab==6): ?>class="active"<?php endif ?>><a href="<?= site_url('database/kosongkan')?>">Kosongkan DB</a></li>
													<li <?php if ($act_tab==3): ?>class="active"<?php endif ?>><a href="<?= site_url('database/import_bip')?>">Impor BIP</a></li>
													<li <?php if ($act_tab==5): ?>class="active"<?php endif ?>><a href="<?= site_url('database/migrasi_cri')?>">Migrasi DB</a></li>-->
												</ul>
												<div class="tab-content">

<?php	$this->load->view($content); ?>
<?php	$this->load->view('footer'); ?>
