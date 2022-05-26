<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<style>
.table {
	font-size: 14px;
}
</style>

<div class="pcoded-main-container">
	<div class="pcoded-content">

		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Identitas <?= $desa; ?></h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= site_url('beranda'); ?>"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Identitas <?= $desa; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->


		<!-- [ Main Content ] start -->
		<div class="row">
			<div class="col-xl-12 col-md-12">
      <?php $this->load->view('identitas_desa/peta.php');?>

      <div class="card">

      <form id="mainform" name="mainform" action="" method="post">

          <div class="card-header">
        
            <div class="col-md-12">
              <div class="pull-right">
              <?php if ($this->CI->cek_hak_akses('h')): ?>
              <a href="<?= site_url('identitas_desa/form'); ?>" class="btn btn-warning" title="Ubah Data" ><i class="fa fa-edit"></i> Ubah Data
              <?= $desa; ?>
              </a> 
              <!--<a href="<?= site_url('identitas_desa/maps/kantor'); ?>" class="btn btn-box bg-purple btn-sm "><i class='fa fa-map-marker'></i> Lokasi Kantor <?= $desa; ?></a>--> 
              <a href="<?= site_url('identitas_desa/maps/kantor'); ?>" class="btn btn-success " title="Ubah Lokasi Kantor Desa"><i class="feather mr-2 icon-map-pin"></i> Lokasi Kantor
              <?= $desa; ?>
              </a> 
              <!--<a href="<?= site_url('identitas_desa/maps/wilayah'); ?>" class="btn btn-box btn-info btn-sm btn-sm "><i class='fa fa-map'></i> Peta Wilayah <?= $desa; ?></a>--> 
              <a href="<?= site_url('identitas_desa/maps/wilayah'); ?>" class="btn btn-primary" title="Ubah Wilayah Desa"><i class="feather mr-2 icon-map"></i> Wilayah Desa | Google </a>
              <!--<a href="<?= site_url('identitas_desa/maps_openstreet/wilayah'); ?>" class="btn btn-secondary" title="Ubah Wilayah Desa"><i class='feather mr-2 icon-map'></i> Wilayah Desa | OSM</a>-->
              <?php endif; ?>
              </div>
            </div>
          </div>


          <div class="card-body table-border-style">
            <div class="table-responsive">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th colspan="3" style="background-color:#606BFD; color:#fff"><strong>
                      <?= strtoupper($desa); ?>
                      </strong></th>
                  </tr>
                  <tr>
                    <td width="300">Nama
                      <?= $desa; ?></td>
                    <td width="1">:</td>
                    <td><?= $main['nama_desa']; ?></td>
                  </tr>
                  <tr>
                    <td>Kode
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= kode_wilayah($main['kode_desa']); ?></td>
                  </tr>
                  <tr>
                    <td>Kode Pos
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['kode_pos']; ?></td>
                  </tr>
                  <tr>
                    <td>Kepala
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['nama_kepala_desa']; ?></td>
                  </tr>
                  <tr>
                    <td>NIP Kepala
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['nip_kepala_desa']; ?></td>
                  </tr>
                  <tr>
                    <td>Alamat Kantor
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['alamat_kantor']; ?></td>
                  </tr>
                  <tr>
                    <td>E-Mail
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['email_desa']; ?></td>
                  </tr>
                  <tr>
                    <td>Telpon
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['telepon']; ?></td>
                  </tr>
                  <tr>
                    <td>Website
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['website']; ?></td>
                  </tr>
                  <tr>
                    <th colspan="3" style="background-color:#606BFD; color:#fff"><strong>
                      <?= strtoupper($kecamatan); ?>
                      </strong></th>
                  </tr>
                  <tr>
                    <td>Nama
                      <?= $kecamatan; ?></td>
                    <td>:</td>
                    <td><?= $main['nama_kecamatan']; ?></td>
                  </tr>
                  <tr>
                    <td>Kode
                      <?= $kecamatan; ?></td>
                    <td>:</td>
                    <td><?= kode_wilayah($main['kode_kecamatan']); ?></td>
                  </tr>
                  <tr>
                    <td>Nama
                      <?= ucwords($this->setting->sebutan_camat); ?></td>
                    <td>:</td>
                    <td><?= $main['nama_kepala_camat']; ?></td>
                  </tr>
                  <tr>
                    <td>NIP
                      <?= ucwords($this->setting->sebutan_camat); ?></td>
                    <td>:</td>
                    <td><?= $main['nip_kepala_camat']; ?></td>
                  </tr>
                  <tr>
                    <th colspan="3" style="background-color:#606BFD; color:#fff"><strong>
                      <?= strtoupper($kabupaten); ?>
                      </strong></th>
                  </tr>
                  <tr>
                    <td>Nama
                      <?= $kabupaten; ?></td>
                    <td>:</td>
                    <td><?= $main['nama_kabupaten']; ?></td>
                  </tr>
                  <tr>
                    <td>Kode
                      <?= $kabupaten; ?></td>
                    <td>:</td>
                    <td><?= kode_wilayah($main['kode_kabupaten']); ?></td>
                  </tr>
                  <tr>
                    <th colspan="3" style="background-color:#606BFD; color:#fff"><strong> PROVINSI</strong></th>
                  </tr>
                  <tr>
                    <td>Nama Provinsi</td>
                    <td>:</td>
                    <td><?= $main['nama_propinsi']; ?></td>
                  </tr>
                  <tr>
                    <td>Kode Provinsi</td>
                    <td>:</td>
                    <td><?= kode_wilayah($main['kode_propinsi']); ?></td>
                  </tr>
                  <tr>
                    <th colspan="3" style="background-color:#606BFD; color:#fff"><strong> BATAS WILAYAH</strong></th>
                  </tr>
                  <tr>
                    <td>Utara
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['batas_utara']; ?></td>
                  </tr>
                  <tr>
                    <td>Selatan
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['batas_selatan']; ?></td>
                  </tr>
                  <tr>
                    <td>Timur
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['batas_timur']; ?></td>
                  </tr>
                  <tr>
                    <td>Barat
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['batas_barat']; ?></td>
                  </tr>
                  <tr>
                    <td>Luas Wilayah
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['luas_wilayah']; ?> Ha</td>
                  </tr>
                  <tr>
                    <td>Koordinat Bujur (Lang)
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['lng']; ?></td>
                  </tr>
                  <tr>
                    <td>Koordinat Lintang (lat)
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['lat']; ?></td>
                  </tr>
                  <!--<tr>
                    <td>Koordinat Wilayah 
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['path']; ?></td>
                  </tr>-->
                  <tr>
                    <td>Ketinggian Diatas Permukaan Laut</td>
                    <td>:</td>
                    <td><?= $main['mdpl']; ?> mdpl</td>
                  </tr>
                  <tr>
                    <td><?= $desa; ?> Terluar di Indonesia</td>
                    <td>:</td>
                    <td><?= $main['terluar_id']; ?></td>
                  </tr>
                  <tr>
                    <td><?= $desa; ?> Terluar di Provinsi</td>
                    <td>:</td>
                    <td><?= $main['terluar_prov']; ?></td>
                  </tr>
                  <tr>
                    <td><?= $desa; ?> Terluar di Kabupaten</td>
                    <td>:</td>
                    <td><?= $main['terluar_kab']; ?></td>
                  </tr>
                  <tr>
                    <td><?= $desa; ?> Terluar di Kecamatan</td>
                    <td>:</td>
                    <td><?= $main['terluar_kec']; ?></td>
                  </tr>
                  <tr>
                    <th colspan="3" style="background-color:#606BFD; color:#fff"><strong>
                    PROFIL SINGKAT</strong></th>
                  </tr>
                  <tr>
                    <td>Profil
                      <?= $desa; ?></td>
                    <td>:</td>
                    <td><?= $main['profil_singkat']; ?></td>
                  </tr>
                  <tr>
                    <td>Visi</td>
                    <td>:</td>
                    <td><?= $main['visi']; ?></td>
                  </tr>
                  <tr>
                    <td>Misi </td>
                    <td>:</td>
                    <td><?= $main['misi']; ?></td>
                  </tr>
                  <tr>
                    <td>Strategi</td>
                    <td>:</td>
                    <td><?= $main['strategi']; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>