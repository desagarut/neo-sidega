<div class="pcoded-main-container">

	<div class="page-header">
		<h1>Biodata Penduduk</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('penduduk/clear')?>"> Daftar Penduduk</a></li>
			<li class="active">Biodata Penduduk</li>
		</ol>
	</div>
	<section class="content" id="maincontent">
		<form id="mainform" name="mainform" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" onreset="reset_hamil();">
			<div class="row">
				<?php include("donjo-app/views/sid/kependudukan/penduduk_form_isian.php"); ?>
			</div>
		</form>
	</div>
</div>
