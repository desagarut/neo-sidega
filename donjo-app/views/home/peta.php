<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v5.7/mapsJavaScriptAPI.js" async defer></script>

<script>
var map
var kantorDesa

function initMap() {
    <?php if (!empty($desa['lat']) && !empty($desa['lng'])): ?>
        var center = {
            lat: <?=$desa['lat']?>,
            lng: <?=$desa['lng']?>
        }
    <?php else: ?>
        var center = {
            lat: -7.34298008144879,
            lng: 107.217667252986,
        }
    <?php endif; ?>
        
    var zoom = 13
    //Jika posisi kantor desa belum ada, maka posisi peta akan menampilkan seluruh Indonesia
    map = new google.maps.Map(document.getElementById("peta-desa"), { center, zoom:<?=$desa['zoom']?>, mapTypeId:google.maps.MapTypeId.<?=$desa['map_tipe']?>});

    kantorDesa = new google.maps.Marker({
        position: center,
        map: map,
        title: 'Kantor <?php echo ucwords($this->setting->sebutan_desa)." "?><?php echo ucwords($desa['nama_desa'])?>',
        animation: google.maps.Animation.BOUNCE
    });

    <?php if (!empty($desa['path'])): ?>
        let polygon_desa = <?= $desa['path']; ?>;
        
        polygon_desa[0].map((arr, i) => {
            polygon_desa[i] = { lat: arr[0], lng: arr[1] }
        })
        
        //Style polygon
        var batasWilayah = new google.maps.Polygon({
            paths: polygon_desa,
            strokeColor: '<?=$desa['warna_garis']?>',
            strokeOpacity: 1,
            strokeWeight: 3,
            fillColor: '<?=$desa['warna']?>',
            fillOpacity: 0.25
        });

        batasWilayah.setMap(map)
    <?php endif; ?>
}
</script>

<!-- widget Peta Wilayah Desa -->

<div class="col-lg-8 col-md-12">
  <div class="card">
    <div class="card-header">
      <h5>Peta Desa</h5>
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
    <div class="card-body">
        <div id="peta-desa" class="set-map" style="height: 405px"></div>
    </div>
  </div>
</div>
