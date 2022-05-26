<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="col-lg-12 col-md-12">
<div class="row">
        <!-- seo start -->
        <div class="col-xl-4 col-md-12">
        <a href="<?= site_url('penduduk/clear') ?>" title="Lihat Daftar Penduduk">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <?php foreach ($penduduk as $data) : ?>
                                <h3><?= $data['jumlah'] ?><small> Jiwa</small></h3>
                            <?php endforeach; ?>
                            <h6 class="text-muted m-b-0">Penduduk <i class="fa fa-caret-up text-c-red m-l-10"></i></h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart1" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-xl-4 col-md-6">
        <a href="<?= site_url('keluarga/clear') ?>" class="small-box-footer" title="Lihat Daftar Keluarga">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                        <?php foreach ($keluarga as $data) : ?>
                            <h3><?= $data['jumlah'] ?><small> KK</small></h3>
                        <?php endforeach; ?>    
                            <h6 class="text-muted m-b-0">Kepala Keluarga<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart2" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <div class="col-xl-4 col-md-6">
        <a href="<?= site_url('rtm/clear') ?>" title="Lihat Daftar Rumah Tangga">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                        <?php foreach ($rtm as $data) : ?>
                            <h3><?= $data['jumlah'] ?><small> RTM</small> </h3>
                            <?php endforeach; ?>    
                            <h6 class="text-muted m-b-0">Rumah Tangga<i class="fa fa-caret-up text-c-red m-l-10"></i></h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart3" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        </div>
        <!-- seo end -->
    </div>
    <!-- page statustic card start -->
    <div class="row">
        <div class="col-md-2">
            <a href="<?= site_url('sid_core') ?>" title="Wilayah Dusun">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($dusun as $data) : ?>
                                    <h4 class="text-c-yellow"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">Wil.Dusun</h6>
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
        <div class="col-md-2">
            <a href="<?= site_url('program_bantuan') ?>" title="Program Bantuan">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($penduduk as $data) : ?>
                                    <h4 class="text-c-green"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">Bantuan</h6>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-4 text-right">
                                <i class="feather icon-activity f-28"></i>
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
        <div class="col-md-2">
            <a href="<?= site_url('dpt') ?>" class="small-box-footer" title="Daftar Pemilih Tetap">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($keluarga as $data) : ?>
                                    <h4 class="text-c-red"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">DPT</h6>
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
        <div class="col-md-2">
            <a href="<?= site_url('laporan_rentan') ?>" title="Kelompok Rentan">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($rtm as $data) : ?>
                                    <h4 class="text-c-blue"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">Kel. Rentan</h6>
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
        <div class="col-md-2">
            <a href="<?= site_url('statistik') ?>" title="Kepemilikan KTP Elektronik">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <?php foreach ($dusun as $data) : ?>
                                    <h4 class="text-c-purple"><?= $data['jumlah'] ?></h4>
                                    <h6 class="text-muted m-b-0">E-KTP</h6>
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
        <div class="col-md-2">
            <a href="<?= site_url('statistik') ?>" title="Kepemilikan Akta Kelahiran">
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
</div>
<script>
'use strict';
$(document).ready(function() {
    setTimeout(function() {
        floatchart()
    }, 100);
});

function floatchart() {
    // [ support-chart ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'area',
                height: 80,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#4680ff"],
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                data: [0, 20, 10, 45, 30, 55, 20, 30, 0]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ticket '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#support-chart"), options1).render();
    });
    // [ support-chart ] end
    // [ support-chart1 ] start
    $(function() {
        var options1 = {
            chart: {
                type: 'area',
                height: 80,
                sparkline: {
                    enabled: true
                }
            },
            colors: ["#9ccc65"],
            stroke: {
                curve: 'smooth',
                width: 2,
            },
            series: [{
                data: [0, 20, 10, 45, 30, 55, 20, 30, 0]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Ticket '
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        }
        new ApexCharts(document.querySelector("#support-chart1"), options1).render();
    });
    // [ support-chart1 ] end
    // [ power-card-chart1 ] start
    $(function() {
        var options = {
            chart: {
                type: 'line',
                height: 75,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#ff5252"],
            stroke: {
                curve: 'smooth',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [55, 35, 75, 50, 90, 50]
            }],
            yaxis: {
                min: 10,
                max: 100,
            },
            tooltip: {
                theme: 'dark',
                fixed: {
                    enabled: false
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Power'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#power-card-chart1"), options);
        chart.render();
    });
    // [ power-card-chart1 ] end
    // [ power-card-chart3 ] start
    $(function() {
        var options = {
            chart: {
                type: 'line',
                height: 75,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#ffba57"],
            stroke: {
                curve: 'smooth',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [55, 35, 75, 50, 90, 50]
            }],
            yaxis: {
                min: 10,
                max: 100,
            },
            tooltip: {
                theme: 'dark',
                fixed: {
                    enabled: false
                },
                x: {
                    show: false,
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Temperature'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#power-card-chart3"), options);
        chart.render();
    });
    // [ power-card-chart3 ] end
    // [ seo-chart1 ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 40,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#4680ff"],
            fill: {
                type: 'solid',
                opacity: 0.3,
            },
            markers: {
                size: 2,
                opacity: 0.9,
                colors: "#4680ff",
                strokeColor: "#4680ff",
                strokeWidth: 2,
                hover: {
                    size: 4,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [9, 66, 41, 89, 63, 25, 44, 12, 36, 20, 54, 25, 9]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Visits :'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#seo-chart1"), options);
        chart.render();
    });
    // [ seo-chart1 ] end
    // [ seo-chart2 ] start
    $(function() {
        var options = {
            chart: {
                type: 'bar',
                height: 40,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#9ccc65"],
            plotOptions: {
                bar: {
                    columnWidth: '60%'
                }
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63]
            }],
            xaxis: {
                crosshairs: {
                    width: 1
                },
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Bounce Rate :'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#seo-chart2"), options);
        chart.render();
    });
    // [ seo-chart2 ] end
    // [ seo-chart3 ] start
    $(function() {
        var options = {
            chart: {
                type: 'area',
                height: 40,
                sparkline: {
                    enabled: true
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ["#ff5252"],
            fill: {
                type: 'solid',
                opacity: 0,
            },
            markers: {
                size: 2,
                opacity: 0.9,
                colors: "#ff5252",
                strokeColor: "#ff5252",
                strokeWidth: 2,
                hover: {
                    size: 4,
                }
            },
            stroke: {
                curve: 'straight',
                width: 3,
            },
            series: [{
                name: 'series1',
                data: [9, 66, 41, 89, 63, 25, 44, 12, 36, 20, 54, 25, 9]
            }],
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Products :'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#seo-chart3"), options);
        chart.render();
    });
    // [ seo-chart3 ] end
}
</script>