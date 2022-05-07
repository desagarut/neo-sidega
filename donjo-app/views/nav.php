<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light">
		<div class="navbar-wrapper ">
		<div class="navbar-content scroll-div">
				
				<div>
					<div class="main-menu-header">
						<img class="img-radius" src="<?= gambar_desa($desa['logo']); ?>" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details"><?= ucwords($this->setting->sebutan_desa . " " . $desa['nama_desa']); ?> <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="<?= site_url('user_setting'); ?>"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="<?= site_url('insidega/logout'); ?>"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>	
				
				<ul class="nav pcoded-inner-navbar sidenav-inner">
					<li class="nav-item pcoded-menu-caption">
					<label><a href="<?=site_url()?>beranda">Menu</a></label>
					</li>

			<?php foreach ($modul AS $mod): ?>
				<?php if ($this->CI->cek_hak_akses('b', $mod['url'])): ?>
					<?php if (count($mod['submodul'])==0): ?>
					<li class="<?= jecho($this->modul_ini, $mod['id'], 'nav-item active'); ?>">
					    <a href="<?= site_url("$mod[url]"); ?>"><span class="pcoded-micon">
							<i class="fa <?= $mod['ikon']; ?>" <?= jecho($this->modul_ini, $mod['id'], 'text-aqua'); ?>></i></span><span class="pcoded-mtext"><?= $mod['modul']; ?></span>
						</a>
					</li>

					<?php else : ?>

					<li class="nav-item pcoded-hasmenu <?= jecho($this->modul_ini, $mod['id'], 'active'); ?>">
					    <a href="<?= site_url("$mod[url]"); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa <?= $mod['ikon']; ?> <?= jecho($this->modul_ini, $mod['id'], 'text-aqua'); ?>"></i></span><span class="pcoded-mtext"><?= $mod['modul']; ?></span></a>
					    <ul class="pcoded-submenu <?= jecho($this->modul_ini, $mod['id'], 'active'); ?>">
						<?php foreach ($mod['submodul'] as $submod): ?>
					        <li class="<?= jecho($this->sub_modul_ini, $submod['id'], 'active'); ?>"><a href="<?= site_url("$submod[url]"); ?>">Vertical
								<i class="fa <?= ($submod['ikon'] != NULL) ? $submod['ikon'] : 'fa-circle-o'; ?> <?= jecho($this->sub_modul_ini, $submod['id'], 'text-red'); ?>"></i> <?= $submod['modul']; ?></a>
							</li>
					        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
						<?php endforeach; ?>	
					    </ul>
					</li>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>

<!--					<li class="nav-item pcoded-menu-caption">
					    <label>UI Element</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="bc_alert.html">Alert</a></li>
					        <li><a href="bc_button.html">Button</a></li>
					        <li><a href="bc_badges.html">Badges</a></li>
					        <li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
					        <li><a href="bc_card.html">Cards</a></li>
					        <li><a href="bc_collapse.html">Collapse</a></li>
					        <li><a href="bc_carousel.html">Carousel</a></li>
					        <li><a href="bc_grid.html">Grid system</a></li>
					        <li><a href="bc_progress.html">Progress</a></li>
					        <li><a href="bc_modal.html">Modal</a></li>
					        <li><a href="bc_spinner.html">Spinner</a></li>
					        <li><a href="bc_tabs.html">Tabs & pills</a></li>
					        <li><a href="bc_typography.html">Typography</a></li>
					        <li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
					        <li><a href="bc_toasts.html">Toasts</a></li>
					        <li><a href="bc_extra.html">Other</a></li>
					    </ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Forms &amp; table</label>
					</li>
					<li class="nav-item">
					    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
					</li>
					<li class="nav-item">
					    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Chart & Maps</label>
					</li>
					<li class="nav-item">
					    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
					</li>
					<li class="nav-item">
					    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
					        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
					    </ul>
					</li>
					<li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>
					-->
				</ul>
				
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<img src="<?php echo base_url() . 'assets/files/logo/neosidega.fw.png'; ?>" style="width:40px" alt="" class="logo">
						<h6 class="mt-3">Selamat</h6>
						<p>Anda sedang menggunakan <br/>SIDeGa Versi <?= AmbilVersi() ?></p>
						<a href="https://desagarut.id" target="_blank" class="btn btn-primary btn-sm text-white m-0">Website SIDeGa</a>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
    
        
<!--
<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= gambar_desa($desa['logo']); ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<strong><?= ucwords($this->setting->sebutan_desa . " " . $desa['nama_desa']); ?></strong>
				</br>
				<?php
					$seb_kec = $this->setting->sebutan_kecamatan;
					$nam_kec = $desa['nama_kecamatan'];
					$seb_kab = $this->setting->sebutan_kabupaten;
					$nam_kab = $desa['nama_kabupaten'];
				?>
				<?php	if (strlen($nam_kec)<=12 AND strlen($nam_kab)<=12): ?>
					<?= ucwords($seb_kec . " ".$nam_kec); ?>
					</br>
					<?= ucwords($seb_kab." ".$nam_kab); ?>
				<?php	else: ?>
					<?= ucwords(substr($seb_kec, 0, 3) . ". " . $nam_kec); ?>
					</br>
					<?= ucwords(substr($seb_kab, 0, 3).". " . $nam_kab); ?>
				<?php	endif; ?><br/>
                <?php //$this->load->view('jam.php');?>
            </div>		
        </div>

		<ul class="sidebar-menu" data-widget="tree">-->
			<!--<li class="header">MENU UTAMA</li>-->
<!--			<?php foreach ($modul AS $mod): ?>
				<?php if ($this->CI->cek_hak_akses('b', $mod['url'])): ?>
					<?php if (count($mod['submodul'])==0): ?>
						<li class="<?= jecho($this->modul_ini, $mod['id'], 'active'); ?>">
							<a href="<?= site_url("$mod[url]"); ?>">
								<i class="fa <?= $mod['ikon']; ?> <?= jecho($this->modul_ini, $mod['id'], 'text-aqua'); ?>"></i><span><?= $mod['modul']; ?></span>
								<span class="pull-right-container"></span>
							</a>
						</li>
					<?php else : ?>
						<li class="treeview <?= jecho($this->modul_ini, $mod['id'], 'active'); ?>">
							<a href="<?= site_url("$mod[url]"); ?>">
								<i class="fa <?= $mod['ikon']; ?> <?= jecho($this->modul_ini, $mod['id'], 'text-aqua'); ?>"></i><span><?= $mod['modul']; ?></span>
								<span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
							</a>
							<ul class="treeview-menu <?= jecho($this->modul_ini, $mod['id'], 'active'); ?>">
								<?php foreach ($mod['submodul'] as $submod): ?>
									<li class="<?= jecho($this->sub_modul_ini, $submod['id'], 'active'); ?>">
										<a href="<?= site_url("$submod[url]"); ?>">
											<i class="fa <?= ($submod['ikon'] != NULL) ? $submod['ikon'] : 'fa-circle-o'; ?> <?= jecho($this->sub_modul_ini, $submod['id'], 'text-red'); ?>"></i>
											<?= $submod['modul']; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</li>
					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</section>
</aside>-->

