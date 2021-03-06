<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h5 class="m-b-10">Data Keluarga</h5>
		<ul class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('keluarga/clear')?>"> Daftar Keluarga</a></li>
			<li class="active">Data Keluarga</li>
		</ul>
	</div>
	<div class="card">
		<form id="mainform" name="mainform" action="<?= $form_action?>" method="post" enctype="multipart/form-data">
			<div class="row">
				<div id="nik_kepala" name="nik_kepala"></div>
					<div class="col-md-12">
						<div class='box box-primary'>
							<div class="card-header">
								<a href="<?=site_url("keluarga")?>" class="btn btn-box btn-info btn-sm btn-sm "  title="Kembali Ke Daftar Penduduk">
									<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Keluarga
								</a>
							</div>
							<div class='box-body'>
								<div class="row">
									<div class='col-sm-7'>
										<div class='form-group'>
											<label for="alamat"> Nomor KK</label>
											<?php
												// $penduduk dipakai kalau validasi data gagal
												if ($penduduk):
													$no_kk = $penduduk['no_kk'];
												else:
													$no_kk = $kk['no_kk'];
												endif;
											?>
											<input id="no_kk"  name="no_kk"  class="form-control input-sm nik" type="text" placeholder="Nomor KK"  value="<?= $no_kk?>"></input>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class='col-sm-12'>
								<div class="form-group bg-primary" style="padding:10px">
									<strong>DATA KEPALA KELUARGA :</strong>
								</div>
							</div>
							<?php include("donjo-app/views/sid/kependudukan/penduduk_form_isian.php"); ?>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

