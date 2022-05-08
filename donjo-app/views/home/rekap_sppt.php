<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="col-md-4">
  <div class="card user-card2">
    <div class="card-body text-center">
      <h6 class="m-b-15">Realisasi PBB</h6>
      <!--<div class="risk-rate">
            <span><b>5</b></span>
        </div>-->

      <div class="col-md-12">
        <div id="pie-chart-2" style="width:100%"></div>
      </div>

      <?php
      if (isset($data)) {
        $d = $data->row();
      ?>
        <h6 class="m-b-10 m-t-10">Objek Pajak: <?= $d->jumlah_nop ?></h6>
        <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
          <div class="col m-t-15 b-r-default">
            <h6 class="text-muted">Lunas</h6>
            <h6><?= $rupiah($d->pajak_lunas) ?></h6>
          </div>
          <div class="col m-t-15">
            <h6 class="text-muted">Terhutang</h6>
            <h6><?= $rupiah($d->pajak_terhutang) ?></h6>
          </div>
        </div>
    </div>
    <a href="<?= site_url('data_sppt/rekap') ?>"><button class="btn btn-success btn-block">Lihat Detail</button></a>
  <?php
      }
  ?>
  </div>
</div>
