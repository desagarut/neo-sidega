<?php	defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!-- Menampilkan OpenStreetMap -->
<div class="pcoded-main-container">
	<div class="pcoded-content">

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
							<li class="breadcrumb-item"><a href="#!">Peta Wilayah </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
					<a href="<?= site_url('gis')?>"><button class="btn btn-primary btn-sm mb-2 mr-2">Peta Wilayah</button></a>
					<a href="<?= site_url('gis/osm')?>"><button class="btn btn-secondary btn-sm mb-2 mr-2">OSM</button></a>

				<div class="card-header-right">
					<div class="btn-group card-option">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather icon-more-horizontal"></i> </button>
					<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
						<li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
						<li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
						<li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
						<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
					</ul>
					</div>
				</div>
			</div>

			<form action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
				<div class="card-body">
					<div id="map">
						<input type="hidden" id="path" name="path" value="<?= $wil_ini['path']?>">
						<input type="hidden" name="id" id="id"  value="<?= $wil_ini['id']?>"/>
						<input type="hidden" name="zoom" id="zoom"  value="<?= $wil_ini['zoom']?>"/>
						<?php include("donjo-app/views/gis/cetak_peta.php"); ?>
					</div>
				</div>
			</form>
		</div>
		</div>
	</div>
</div>

<?php $this->load->view('global/konfirmasi'); ?>


<script>

	
var map = L.map('map').setView([<?=$desa['lat'].", ".$desa['lng']?>], 13);

//polygon

var WilayahDesa = L.polygon([<?= $desa['path'] ?>
],{
color: '<?=$desa['warna_garis']?>',
    fillColor: '<?=$desa['warna']?>',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);

//polygon
/*
var dusun = L.polygon([<?=$wil_ini['path']?>
],{
color: '<?=$desa['warna_garis']?>',
    fillColor: '<?=$desa['warna']?>',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map);
*/


// Menambahkan zoom scale ke peta
L.control.scale().addTo(map);


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OSM</a> contributors'
}).addTo(map);

var KantorDesa = L.marker([<?=$desa['lat'].", ".$desa['lng']?>]).addTo(map)
    .bindPopup('Kantor <?= ucwords($this->setting->sebutan_desa) . ' ' . $desa['nama_desa'] ?>')
    .openPopup(true);

</script>

