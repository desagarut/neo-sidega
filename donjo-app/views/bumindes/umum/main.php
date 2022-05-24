<style type="text/css">
  .disabled
	{
     pointer-events: none;
     cursor: default;
  }
</style>
<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h1>Buku Administrasi Umum - <?= $subtitle ?></h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active"><?= $subtitle ?></li>
		</ol>
	</div>
	<div class="card">
		<div class="row">
			<div id="umum-sidebar" class="col-sm-3">
				<?php $this->load->view('bumindes/umum/side') ?>
			</div>
			<div id="umum-content" class="col-sm-9">
				<?php $this->load->view($main_content) ?>
			</div>
		</div>
	</div>
</div>
