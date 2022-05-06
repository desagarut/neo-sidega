<style type="text/css">
	.text-white {
		color: white;
	}
	.pengaturan {
		float: left;
		padding-left: 10px;
	}
	.modal-body
	{
		overflow-y: auto;
		height: 400px;
		margin-left: 5px;
		margin-right: 5px;
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
                            <h5 class="m-b-10">Dashboard SIDeGa</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?=site_url()?>beranda"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard SIDeGa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="row">
			<?php $this->load->view('home/peta.php');?>
			<?php $this->load->view('home/stat_penduduk.php');?>
			<?php //$this->load->view('home/kependudukan.php');?>
            <?php $this->load->view('home/rekap_sppt.php');?>
			<?php $this->load->view('home/layanan.php');?>
            
        </div>
        <div class='row'>
            <?php //$this->load->view('home/info.php');?>
			<?php //$this->load->view('home/layanan.php');?>
        </div>
        <div class='row'>
            <?php $this->load->view('home/umkm.php');?>
            <?php $this->load->view('home/warga_login.php');?>
			<?php $this->load->view('home/aparat_login.php');?>
		</div>
        <div class='row'>
            <?php $this->load->view('home/pengunjung.php');?>
            <?php $this->load->view('home/helpdesk.php');?>
            <?php $this->load->view('home/changelog.php');?>
        </div>
    </div>
</div>


