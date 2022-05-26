<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<div id="isi_popup" style="visibility: collapse;">
	<div id="content">
		<h5 id="firstHeading" class="firstHeading"><b>Wilayah <?= set_ucwords($wilayah); ?></b></h5>
		<div id="bodyContent">
			<p><a href="#collapseStatGraph" class="btn btn-success btn-sm " title="Statistik Penduduk" data-toggle="collapse" data-target="#collapseStatGraph" aria-expanded="false" aria-controls="collapseStatGraph"><i class="fa fa-list"></i>&nbsp;&nbsp;Statistik Penduduk&nbsp;&nbsp;</a></p>
			<div class="collapse card-body no-padding" id="collapseStatGraph">
				<div class="card-body">
					<?php foreach ($list_ref as $key => $value): ?>
						<li <?= jecho($lap, $key, 'class="active"'); ?>><a href="<?= site_url("statistik_web/chart_gis_desa/$key/" . underscore($desa[nama_desa])); ?>" data-remote="false" data-toggle="modal" data-target="#modalSedang" data-title="Statistik Penduduk <?= set_ucwords($wilayah) ?>"><?= $value ?></a></li>
					<?php endforeach; ?>
				</div>
			</div>
			<!--<p><a href="<?= site_url("load_aparatur_desa"); ?>" class="btn btn-box bg-navy btn-sm " data-title="Aparatur <?= ucwords($this->setting->sebutan_desa)?>" data-remote="false" data-toggle="modal" data-target="#modalKecil"><i class="fa fa-user"></i>&nbsp;&nbsp;Aparatur <?= ucwords($this->setting->sebutan_desa)?>&nbsp;&nbsp;</a></p>
			<p><a href="<?= site_url("load_apbdes"); ?>" class="btn btn-box bg-navy btn-sm " data-title="Laporan APBDES 2019 - Grafik" data-remote="false" data-toggle="modal" data-target="#modalSedang"><i class="fa fa-bar-chart"></i>&nbsp;&nbsp;Grafik Keuangan&nbsp;&nbsp;</a></p>
					-->
		</div>
	</div>
</div>

