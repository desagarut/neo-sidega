<style type="text/css">
  .disabled
	{
     pointer-events: none;
     cursor: default;
  }
</style>
<div class="pcoded-main-container">

	<div class="page-header">
		<h1>Buku Administrasi Pembangunan</h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active"><?= $subtitle ?></li>
		</ol>
	</div>
	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-3">
				<?php $this->load->view('bumindes/pembangunan/side') ?>
			</div>
			<div class="col-md-9">
				<?php $this->load->view($main_content) ?>
			</div>
		</div>
	</div>
</div>
