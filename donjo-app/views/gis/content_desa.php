<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div id="isi_popup" style="visibility: hidden;">
	<div id="content">
		<center><h5 id="firstHeading" class="firstHeading"><b>Wilayah <?= set_ucwords($wilayah); ?></b></h5></center>
		<div id="bodyContent">
			<p><center><a href="#collapseStatGraph" class="btn btn-social btn-box bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Statistik Penduduk" data-toggle="collapse" data-target="#collapseStatGraph" aria-expanded="false" aria-controls="collapseStatGraph"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Statistik Penduduk&nbsp;&nbsp;</a></center></p>
			<div class="collapse box-body no-padding" id="collapseStatGraph">
				<div class="card card-body">
					<?php foreach ($list_ref as $key => $value): ?>
						<li <?= jecho($lap, $key, 'class="active"'); ?>><a href="<?= site_url("statistik_web/chart_gis_desa/$key/" . underscore($desa[nama_desa])); ?>" data-remote="false" data-toggle="modal" data-target="#modalSedang" data-title="Statistik Penduduk <?= set_ucwords($wilayah) ?>"><?= $value ?></a></li>
					<?php endforeach; ?>
				</div>
			</div>
			<p><center><a href="<?= site_url("load_aparatur_desa"); ?>" class="btn btn-social btn-box bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-title="Aparatur <?= ucwords($this->setting->sebutan_desa)?>" data-remote="false" data-toggle="modal" data-target="#modalKecil"><i class="fa fa-user"></i>&nbsp;&nbsp;Aparatur <?= ucwords($this->setting->sebutan_desa)?>&nbsp;&nbsp;</a></center></p>
			<p><center><a href="<?= site_url("load_apbdes"); ?>" class="btn btn-social btn-box bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-title="Laporan APBDES 2019 - Grafik" data-remote="false" data-toggle="modal" data-target="#modalSedang"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Grafik Keuangan&nbsp;&nbsp;</a></center></p>
		</div>
	</div>
</div>
					-->
<div class="modal fade" id="isi_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><b>Statistik <?= set_ucwords($wilayah); ?></b></h5>
			</div>
			<div class="modal-body">
				<div class="btn-group mb-2 mr-2 text-center">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Statistik Penduduk</button>
					<div class="dropdown-menu">
						<?php foreach ($list_ref as $key => $value): ?>
							<a class="dropdown-item" href="#" data-href="<?= site_url("statistik_web/chart_gis_desa/$key/" . underscore($desa[nama_desa])); ?>" data-remote="false" data-toggle="modal" data-target="#isi_popup" data-title="Statistik Penduduk <?= set_ucwords($wilayah) ?>"><?= $value ?></a>
						<?php endforeach; ?>	
					</div>
				</div>

				<button  type="button" class="btn  btn-primary" data-href="<?= site_url("statistik_web/chart_gis_desa/$key/" . underscore($desa[nama_desa])); ?>" data-toggle="modal" data-target="#isi_popup">Launch demo modal</button>

			<p><a href="<?= site_url("load_aparatur_desa"); ?>" class="btn btn-primary btn-sm " data-title="Aparatur <?= ucwords($this->setting->sebutan_desa)?>" data-remote="false" data-toggle="modal" data-target="#modalKecil"><i class="fa fa-user"></i>&nbsp;&nbsp;Aparatur <?= ucwords($this->setting->sebutan_desa)?>&nbsp;&nbsp;</a></p>
			<p><a href="<?= site_url("load_apbdes"); ?>" class="btn btn-success btn-sm " data-title="Laporan APBDES 2019 - Grafik" data-remote="false" data-toggle="modal" data-target="#modalSedang"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Grafik Keuangan&nbsp;&nbsp;</a></p>

			</div>
		</div>
	</div>
</div>
