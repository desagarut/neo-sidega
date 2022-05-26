<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<style>
  #map
  {
    width:100%;
    height:65vh
  }
  .icon {
    max-width: 70%;
    max-height: 70%;
    margin: 4px;
  }
  .leaflet-control-layers {
  	display: block;
  	position: relative;
  }
  .leaflet-control-locate a {
  font-size: 2em;
	}
</style>
<!-- Menampilkan OpenStreetMap -->
<div class="pcoded-main-container">
	<div class="pcoded-content">

  <div class="page-header">
		<h5 class="m-b-10">Peta <?= $garis['nama']?></h5>
		<ul class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url("garis")?>"> Pengaturan garis </a></li>
			<li class="active">Peta <?= $garis['nama']?></li>
		</ul>
	</div>
  <div class="card">
    <div class="row">
      <div class="col-md-12">
        
          <form action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div id="map">
                    <input type="hidden" id="path" name="path" value="<?= $garis['path']?>">
                    <input type="hidden" name="id" id="id"  value="<?= $garis['id']?>"/>
                  </div>
                </div>
              </div>
            </div>
            <div class='box-footer'>
              <div class='col-xs-12'>
                <a href="<?= site_url("garis")?>" class="btn btn-box bg-purple btn-sm " title="Kembali"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                <a href="#" class="btn btn-box btn-success btn-sm " download="SIDeGa.gpx" id="exportGPX"><i class='fa fa-download'></i> Export ke GPX</a>
								<button type='reset' class='btn btn-box btn-danger btn-sm' id="resetme"><i class='fa fa-times'></i> Reset</button>
								<button type='submit' class='btn btn-box btn-info btn-sm pull-right' id="simpan_kantor"><i class='fa fa-check'></i> Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var infoWindow;
  window.onload = function()
  {
  	<?php if (!empty($desa['lat']) && !empty($desa['lng'])): ?>
  		var posisi = [<?=$desa['lat'].",".$desa['lng']?>];
  		var zoom = <?=$desa['zoom'] ?: 18?>;
  	<?php else: ?>
  		var posisi = [-1.0546279422758742,116.71875000000001];
  		var zoom = 18;
  	<?php endif; ?>

  	//Inisialisasi tampilan peta
  	var peta_garis = L.map('map').setView(posisi, zoom);

    //1. Menampilkan overlayLayers Peta Semua Wilayah
    var marker_desa = [];
    var marker_dusun = [];
    var marker_rw = [];
    var marker_rt = [];

    //OVERLAY WILAYAH DESA
    <?php if (!empty($desa['path'])): ?>
      set_marker_desa(marker_desa, <?=json_encode($desa)?>, "<?=ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa']?>", "<?= favico_desa()?>");
    <?php endif; ?>

    //OVERLAY WILAYAH DUSUN
    <?php if (!empty($dusun_gis)): ?>
      set_marker(marker_dusun, '<?=addslashes(json_encode($dusun_gis))?>', '#FFFF00', '<?=ucwords($this->setting->sebutan_dusun)?>', 'dusun');
    <?php endif; ?>

    //OVERLAY WILAYAH RW
    <?php if (!empty($rw_gis)): ?>
      set_marker(marker_rw, '<?=addslashes(json_encode($rw_gis))?>', '#8888dd', 'RW', 'rw');
    <?php endif; ?>

    //OVERLAY WILAYAH RT
    <?php if (!empty($rt_gis)): ?>
      set_marker(marker_rt, '<?=addslashes(json_encode($rt_gis))?>', '#008000', 'RT', 'rt');
    <?php endif; ?>

    //Menampilkan overlayLayers Peta Semua Wilayah
    <?php if (!empty($wil_atas['path'])): ?>
      var overlayLayers = overlayWil(marker_desa, marker_dusun, marker_rw, marker_rt, "<?=ucwords($this->setting->sebutan_desa)?>", "<?=ucwords($this->setting->sebutan_dusun)?>");
    <?php else: ?>
      var overlayLayers = {};
    <?php endif; ?>

    //Menampilkan BaseLayers Peta
    var baseLayers = getBaseLayers(peta_garis, '<?=$this->setting->google_key?>');

    //Menampilkan Peta wilayah yg sudah ada
    <?php if (!empty($garis['path'])): ?>
      var wilayah = <?=$garis['path']?>;
      showCurrentLine(wilayah, peta_garis);
    <?php endif; ?>

    //Menambahkan zoom scale ke peta
    L.control.scale().addTo(peta_garis);

    //Menambahkan toolbar ke peta
    peta_garis.pm.addControls(editToolbarLine());

    //Menambahkan Peta wilayah
    addPetaLine(peta_garis);

    //Export/Import Peta dari file GPX
    L.Control.FileLayerLoad.LABEL = '<img class="icon" src="<?= base_url()?>assets/images/gpx.png" alt="file icon"/>';
    L.Control.FileLayerLoad.TITLE = 'Impor GPX/KML';
    control = eximGpxPoly(peta_garis);

    //Import Peta dari file SHP
    eximShp(peta_garis);

    //Geolocation IP Route/GPS
  	geoLocation(peta_garis);

    //Menghapus Peta wilayah
    hapusPeta(peta_garis);

    // Menampilkan OverLayer Area, Garis, Lokasi
    layerCustom = tampilkan_layer_area_garis_lokasi(peta_garis, '<?=addslashes(json_encode($all_area))?>', '<?=addslashes(json_encode($all_garis))?>', '<?=addslashes(json_encode($all_lokasi))?>', '<?= base_url().LOKASI_SIMBOL_LOKASI?>', '<?= base_url().LOKASI_FOTO_AREA?>', '<?= base_url().LOKASI_FOTO_GARIS?>', '<?= base_url().LOKASI_FOTO_LOKASI?>');

    L.control.layers(baseLayers, overlayLayers, {position: 'topleft', collapsed: true}).addTo(peta_garis);
    L.control.groupedLayers('', layerCustom, {groupCheckboxes: true, position: 'topleft', collapsed: true}).addTo(peta_garis);

  }; //EOF window.onload
</script>
<script src="<?= base_url()?>assets/js/leaflet.filelayer.js"></script>
<script src="<?= base_url()?>assets/js/togeojson.js"></script>
