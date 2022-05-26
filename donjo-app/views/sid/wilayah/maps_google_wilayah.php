<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v5.7/mapsJavaScriptAPI.js" async defer></script>

<script>
  $(document).ready(function() {
    $('#simpan_wilayah').click(function() {
      var path = $('#path').val();
      $.ajax({
          type: "POST",
          url: "<?= $form_action ?>",
          dataType: 'json',
          data: {
            path
          },
        })
        .always(function(e) {
          alert('Perubahan yang dilakukan telah berhasil disimpan! Klik Kembali untuk pindah ke halaman sebelumnya!')
        });
    });
  });

  var batasWilayah
  var map
  var gmaps

  var daerah_desa = <?= $wil_ini['path'] ?: 'null' ?>

  daerah_desa && daerah_desa[0].map((arr, i) => {
    daerah_desa[i] = {
      lat: arr[0],
      lng: arr[1]
    }
  })

  function initMap() {
    gmaps = google.maps

    <?php if (!empty($wil_ini['lat']) && !empty($wil_ini['lng'])) : ?>
      var center = {
        lat: <?= $wil_ini['lat'] ?>,
        lng: <?= $wil_ini['lng'] ?>
      }
    <?php else : ?>
      var center = {
        lat: <?= $wil_atas['lat'] ?>,
        lng: <?= $wil_atas['lat'] ?>
      }
    <?php endif; ?>


    var zoom = 14;
    map = new gmaps.Map($('#map')[0], {
      center,
      zoom,
      streetViewControl: true,
      mapTypeId: google.maps.MapTypeId.HYBRID,
    })

    <?php if (!empty($wil_ini['path'])) : ?>
      //Style polygon
      batasWilayah = new gmaps.Polygon({
        paths: daerah_desa,
        strokeColor: '#d10563',
        strokeOpacity: 1,
        strokeWeight: 3,
        fillColor: '#0028ea',
        fillOpacity: 0.15,
        editable: true,
        draggable: false
      });

      batasWilayah.setMap(map)
      batasWilayah.addListener('mouseup', editPath)
      batasWilayah.addListener('dragend', editPath)
    <?php endif; ?>
  }

  function editPath() {
    const PATHS = this.getPath()
    const NEWPATH = []

    for (var i = 0; i < PATHS.getLength(); i++) {
      const {
        lat,
        lng
      } = PATHS.getAt(i)
      NEWPATH.push([lat(), lng()])
    }

    $('#path').val(JSON.stringify([NEWPATH]))
  }

  function polygonDelete() {
    batasWilayah.setMap(null)
    batasWilayah = null
    $('#path').val(null);
  }

  function polygonAdd() {
    const {
      lat,
      lng
    } = map.getCenter()

    // Clear existing polygon
    if (batasWilayah) polygonDelete()

    // Re new polygon in new position
    batasWilayah = new gmaps.Polygon({
      paths: [{
          lat: lat() - 0.001,
          lng: lng() - 0.002
        }, // Left
        {
          lat: lat() + 0.001,
          lng: lng() - 0.002
        }, // Right
        {
          lat: lat() + 0.001,
          lng: lng()
        }, // Top
      ],
      strokeColor: '#d10563',
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor: '#0028ea',
      fillOpacity: 0.15,
      editable: true,
      draggable: false
    });

    batasWilayah.setMap(map)
    batasWilayah.addListener('mouseup', editPath)
    batasWilayah.addListener('dragend', editPath)
  }

  function polygonReset() {
    // Clear existing polygon
    polygonDelete()

    // Create initial / last saved polygon
    batasWilayah = new gmaps.Polygon({
      paths: daerah_desa,
      strokeColor: '#d10563',
      strokeOpacity: 1,
      strokeWeight: 3,
      fillColor: '#0028ea',
      fillOpacity: 0.15,
      editable: true,
      draggable: false
    });

    batasWilayah.setMap(map)
    batasWilayah.addListener('mouseup', editPath)
    batasWilayah.addListener('dragend', editPath)
  }
</script>
<style>
  #float-btn {
    position: absolute;
    top: 30px;
    right: 10%;
    z-index: 5;
    font-family: 'Roboto', 'sans-serif';
  }

  #float-btn button {
    line-height: 20px;
    margin: 1px 0;
    margin-right: -5px;
    padding: 10px 15px;
    background: #ffffff;
    border: none;
    border-radius: 2px;
    font-size: initial;
    box-shadow: 1px 1px 4px 0px silver;
  }

  #float-btn button:hover {
    background: #ddd
  }
</style>
<style>
  #map {
    z-index: 1;
    width: 100%;
    height: 400px;
    margin-top: auto;
  }
</style>


<div class="pcoded-main-container">
	<div class="pcoded-content">
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Peta Wilayah <?= $nama_wilayah ?></h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= site_url('beranda'); ?>"><i class="feather icon-home"></i></a></li>
              <?php foreach ($breadcrumb as $tautan) : ?>
                <li class="breadcrumb-item"><a href="<?= $tautan['link'] ?>">
                    <?= $tautan['judul'] ?>
                  </a></li>
              <?php endforeach; ?>
              <li class="breadcrumb-item"><a href="#!">Peta Wilayah
                  <?= $wilayah ?>
                </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="row">
        <div class="col-md-12">
          <form action="<?= $form_action ?>" method="post" id="validasi" enctype="multipart/form-data">
            <div class="card-body">
              <div id="float-btn">
                <button type="button" onclick="polygonAdd()">Tambah</button>
                <button type="button" onclick="polygonDelete()">Hapus</button>
                <button type="button" onclick="polygonReset()">Reset</button>
              </div>
              <div id="map"></div>
              <input type="hidden" id="path" name="path" value="<?= $wil_ini['path'] ?>">
              <input type="hidden" name="id" id="id" value="<?= $wil_ini['id'] ?>" />
            </div>

            <div class="card-footer">
              <div class="row">
              <div class="col-md-6 col-sm-12">
                <?php if ($this->CI->cek_hak_akses('h')) : ?>
                  <div class="form-group row">
                    <label class="col-md-3 col-sm-12 col-form-label" for="warna">Warna blok</label>
                    <input type="text" id="warna" name="warna" class="form-control col-md-3 col-sm-12 input-sm required" placeholder="#FFFFFF" value="<?= $wil_ini['warna'] ?>">
                  </div>
              </div>
              <div class="col-md-6 col-sm-12 text-right">
                  <a href="<?= $tautan['link'] ?>" class="btn btn-info" title="Kembali"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                  <a href="#" class="btn btn-warning" download="SIDeGa.gpx" id="exportGPX"><i class='fa fa-download'></i> Export ke GPX</a>
                  <!--<button type="reset" class="btn btn-danger" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>-->
                  <!--<button type="submit" class="btn btn-box btn-info btn-sm" data-dismiss="modal" id="simpan_wilayah"><i class='fa fa-check'></i> Simpan</button>-->
                  <button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
                <?php endif; ?>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>