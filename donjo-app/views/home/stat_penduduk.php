<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="col-lg-12 col-md-12">
    <!-- page statustic card start -->
    <div class="row">
        <div class="col-sm-2">
            <a href="<?= site_url('penduduk/clear') ?>" title="Lihat Daftar Penduduk">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($penduduk as $data) : ?>
                                    <h4 class="text-c-green"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">Penduduk</h6>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-user f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-green">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Details</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-2">
            <a href="<?= site_url('keluarga/clear') ?>" class="small-box-footer" title="Lihat Daftar Keluarga">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($keluarga as $data) : ?>
                                    <h4 class="text-c-red"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">KK</h6>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-users f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-red">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Details</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-2">
            <a href="<?= site_url('rtm/clear') ?>" title="Lihat Daftar Rumah Tangga">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($rtm as $data) : ?>
                                    <h4 class="text-c-blue"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">RTM</h6>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-home f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-blue">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0">Details</p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-down text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-2">
            <a href="<?= site_url('sid_core') ?>" title="Lihat Dusun">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($dusun as $data) : ?>
                                    <h4 class="text-c-yellow"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">Dusun</h6>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-map f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-c-yellow">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"> Details </p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-2">
            <a href="<?= site_url('sid_core') ?>" title="Lihat Dusun">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($dusun as $data) : ?>
                                    <h4 class="text-c-purple"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">KTP</h6>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-credit-card f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-info">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"> Details </p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-2">
            <a href="<?= site_url('sid_core') ?>" title="Lihat Dusun">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($dusun as $data) : ?>
                                    <h4 class="text-c-green"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">Akta Lahir</h6>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-check-square f-28"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-secondary ">
                        <div class="row align-items-center">
                            <div class="col-9">
                                <p class="text-white m-b-0"> Details </p>
                            </div>
                            <div class="col-3 text-right">
                                <i class="feather icon-trending-up text-white f-16"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- page statustic card end -->
    <div class="row">
        <!-- seo start -->
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h3>$16,756</h3>
                            <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart1" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h3>49.54%</h3>
                            <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart2" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h3>1,62,564</h3>
                            <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart3" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo end -->
    </div>
</div>