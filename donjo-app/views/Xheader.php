<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        <?= $this->setting->admin_title
            . ' ' . ucwords($this->setting->sebutan_desa)
            . (($desa['nama_desa']) ? ' ' . $desa['nama_desa'] : '')
            . get_dynamic_title_page_from_path();
        ?>
    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="theme-color" content="#E08E0B">

    <?php if (is_file(LOKASI_LOGO_DESA . "favicon.ico")) : ?>
        <link rel="shortcut icon" href="<?= base_url() ?><?= LOKASI_LOGO_DESA ?>favicon.ico" />
    <?php else : ?>
        <link rel="shortcut icon" href="<?= base_url() ?>favicon.ico" />
    <?php endif; ?>
    <!--<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?= base_url() ?>rss.xml" />-->

    <!-- css neo -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery-ui.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/prism-coy.css">

    <!-- Diperlukan untuk global automatic base_url oleh external js file -->
    <script type="text/javascript">
        var BASE_URL = "<?= base_url(); ?>";
        var SITE_URL = "<?= site_url(); ?>";
    </script>

<!-- Sidega Old -->
		<!-- Bootstrap 3.3.7 -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
		<!-- Font Awesome
		<link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css"> -->
		<!-- Ionicons 
		<link rel="stylesheet" href="<?= base_url()?>assets/css/ionicons.min.css">-->
		<!-- DataTables -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/dataTables.bootstrap.min.css">
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap3-wysihtml5.min.css">
		<!-- Select2 -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/select2.min.css">
		<!-- Bootstrap Color Picker -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-colorpicker.min.css">
		<!-- bootstrap datepicker -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap-datepicker.min.css">
		
		<!-- OpenStreetMap Css -->
		<link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet-geoman.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/L.Control.Locate.min.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/MarkerCluster.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/MarkerCluster.Default.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet-measure-path.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/L.Control.Shapefile.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet.groupedlayercontrol.min.css" />
		<link rel="stylesheet" href="<?= base_url()?>assets/css/peta.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/toastr.min.css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css' rel='stylesheet' />


		<!-- Untuk ubahan style desa -->
		<?php if (is_file("desa/css/insidega.css")): ?>
		<link type='text/css' href="<?= base_url()?>desa/css/insidega.css" rel='Stylesheet' />
		<?php endif; ?>

        
		<!-- OpenStreetMap Js-->
		<script src="<?= base_url()?>assets/js/leaflet.js"></script>
		<script src="<?= base_url()?>assets/js/turf.min.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet-geoman.min.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.filelayer.js"></script>
		<script src="<?= base_url()?>assets/js/togeojson.js"></script>
		<script src="<?= base_url()?>assets/js/togpx.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet-providers.js"></script>
		<script src="<?= base_url()?>assets/js/L.Control.Locate.min.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.markercluster.js"></script>
		<script src="<?= base_url()?>assets/js/peta.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet-measure-path.js"></script>
		<script src="<?= base_url()?>assets/js/apbdes_manual.js"></script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>	
        
		<script src="<?= base_url()?>assets/js/leaflet-mapbox-gl.js"></script>
		<script src="<?= base_url()?>assets/js/shp.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.shpfile.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.groupedlayercontrol.min.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.browser.print.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.browser.print.utils.js"></script>
		<script src="<?= base_url()?>assets/js/leaflet.browser.print.sizes.js"></script>
		<script src="<?= base_url()?>assets/js/dom-to-image.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.5.3/leaflet.markercluster.min.js" integrity="sha512-TiMWaqipFi2Vqt4ugRzsF8oRoGFlFFuqIi30FFxEPNw58Ov9mOy6LgC05ysfkxwLE0xVeZtmr92wVg9siAFRWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<!-- Diperlukan untuk global automatic base_url oleh external js file -->
		<script type="text/javascript">
			var BASE_URL = "<?= base_url(); ?>";
			var SITE_URL = "<?= site_url(); ?>";
		</script>

		<!-- Highcharts JS -->
		<script src="<?= base_url()?>assets/js/highcharts.js"></script>
		<script src="<?= base_url()?>assets/js/highcharts-3d.js"></script>
		<script src="<?= base_url()?>assets/js/exporting.js"></script>
		<script src="<?= base_url()?>assets/js/highcharts-more.js"></script>
		<script src="<?= base_url()?>assets/js/sankey.js"></script>
		<script src="<?= base_url()?>assets/js/organization.js"></script>
		<script src="<?= base_url()?>assets/js/accessibility.js"></script>

		<!-- Untuk ubahan style desa -->
		<?php if (is_file("desa/css/insidega.css")): ?>
		<link type='text/css' href="<?= base_url()?>desa/css/insidega.css" rel='Stylesheet' />
		<?php endif; ?>

    <?php require __DIR__ . '/head_tags.php' ?>
</head>
<!--<body class="<? //= $this->setting->warna_tema_admin; 
                    ?> sidebar-mini fixed <?php if ($minsidebar == 1) : ?>sidebar-collapse<?php endif ?>">-->

<body>
    <!--[ Pre-loader ] start-->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="<?= site_url() ?>first" target="_blank" class="b-brand">

                <!-- ========   change your logo hear   ============ -->
                <img src="<?php echo base_url() . 'assets/files/logo/neosidega.fw.png'; ?>" style="width:40px" alt="" class="logo">
                <img src="<?php echo base_url() . 'assets/files/logo/neosidega.fw.png'; ?>" style="width:40px" alt="" class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!--
                <?php if (ENVIRONMENT == 'development') : ?>
                        <li class="nav-item"> <a> <i class="feather icon-user" title="Development"></i><span class="badge">Development</span> </a></li>
                <?php endif; ?>
                <?php if ($this->CI->cek_hak_akses('b', 'permohonan_surat_admin')) : ?>
                    <li class="nav-item"> <a href="<?= site_url('permohonan_surat_admin/clear'); ?>"> <span><i class="fa fa-print" title="Permohonan Surat"></i>&nbsp;</span> <span class="badge" id="b_permohonan_surat" ></span> </a> </li>
                <?php endif; ?>
                <?php if ($this->CI->cek_hak_akses('b', 'komentar')) : ?>
                        <li class="nav-item"><a href="<?= site_url('komentar'); ?>"> <span><i class="feather icon-user" title="Komentar"></i>&nbsp;</span> <span class="badge" id="b_komentar"></span> </a> </li>
                <?php endif; ?>
                <?php if ($this->CI->cek_hak_akses('b', 'mailbox')) : ?>
                <li> <a href="<?= site_url('mailbox'); ?>"> <span><i class="feather icon-user" title="Pesan Masuk"></i>&nbsp;</span> <span class="badge" id="b_inbox" style="display: none;"></span> </a> </li>
                <?php endif; ?>
                -->
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="#!" class="m-r-10">mark as read</a>
                                    <a href="#!">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="<?= AmbilFoto($foto); ?>" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="<?= AmbilFoto($foto); ?>" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="<?= AmbilFoto($foto); ?>" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="<?= AmbilFoto($foto); ?>" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="#!">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown drp-user dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="<?= AmbilFoto($foto); ?>" class="img-radius" alt="User-Profile-Image">
                                <span><?= $nama ?></span>
                                <a href="<?= site_url('inlogout'); ?>" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="<?= site_url('user_setting'); ?>" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="<?= site_url('inlogout'); ?>" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <input id="success-code" type="hidden" value="<?= $_SESSION['success'] ?>">

    </header>
    <!-- [ Header ] end -->