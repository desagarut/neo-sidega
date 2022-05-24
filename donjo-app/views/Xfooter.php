<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
	
	<!-- Js for google maps -->
	<script src="<?= base_url() ?>assets/js/gmaps.min.js"></script>
	<script src="<?= base_url() ?>assets/js/pages/google-maps.js"></script>            
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

	<!-- Required Js -->
	<script src="<?= base_url()?>assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url()?>assets/js/ripple.js"></script>
	<script src="<?= base_url()?>assets/js/pcoded.min.js"></script>

	<script src="<?= base_url()?>assets/js/plugins/apexcharts.min.js"></script>


	<script src="<?= base_url()?>assets/js/dataTables.indonesian.lang"></script>


<!-- jQuery 3 --> 
<script src="<?= base_url()?>assets/js/jquery.min.js"></script> 
<!-- Jquery UI --> 
<script src="<?= base_url()?>assets/js/jquery-ui.min.js"></script> 
<script src="<?= base_url()?>assets/js/jquery.ui.autocomplete.scroll.min.js"></script> 
<script src="<?= base_url()?>assets/js/moment.min.js"></script> 
<!-- Bootstrap 3.3.7 --> 
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<!-- Select2 --> 
<script src="<?= base_url()?>assets/js/select2.full.min.js"></script> 
<script src="<?= base_url()?>assets/js/select2.full.min.js"></script> 

<!-- DataTables --> 
<script src="<?= base_url()?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?= base_url()?>assets/js/dataTables.bootstrap.min.js"></script> 
<!-- bootstrap color picker --> 
<script src="<?= base_url()?>assets/js/bootstrap-colorpicker.min.js"></script> 
<!-- bootstrap Date time picker --> 
<script src="<?= base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script> 
<script src="<?= base_url()?>assets/js/id.js"></script> 
<!-- bootstrap Date picker --> 
<script src="<?= base_url()?>assets/js/bootstrap-datepicker.min.js"></script> 
<script src="<?= base_url()?>assets/js/bootstrap-datepicker.id.min.js"></script> 
<!-- Bootstrap WYSIHTML5 --> 
<script src="<?= base_url()?>assets/js/bootstrap3-wysihtml5.all.min.js"></script> 
<!-- Slimscroll --> 
<script src="<?= base_url()?>assets/js/jquery.slimscroll.min.js"></script> 
<!-- FastClick --> 
<script src="<?= base_url()?>assets/js/fastclick.js"></script> 
<script src="<?= base_url()?>assets/js/validasi.js"></script> 
<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script> 
<script src="<?= base_url()?>assets/js/messages_id.js"></script> 
<!-- Numeral js --> 
<script src="<?= base_url()?>assets/js/numeral.min.js"></script> 
<!-- Script--> 
<script src="<?= base_url()?>assets/js/script.js"></script> 
<!-- jQuery Knob --> 
<script src="<?= base_url()?>assets/js/jquery.knob.min.js"></script> 

		


				<!-- NOTIFICATION-->
				<script type="text/javascript">

$('document').ready(function() {
	if ($('#success-code').val() == 1) {
		notify = 'success';
		notify_msg = 'Data berhasil disimpan';
	} else if ($('#success-code').val() == -1) {
		notify = 'error';
		notify_msg = 'Data gagal disimpan <?= addslashes($this->session->error_msg) ?>';
	} else if ($('#success-code').val() == -2) {
		notify = 'error';
		notify_msg = 'Data gagal disimpan, nama id sudah ada!';
	} else if ($('#success-code').val() == -3) {
		notify = 'error';
		notify_msg = 'Data gagal disimpan, nama id sudah ada!';
	} else if ($('#success-code').val() == 4) {
		notify = 'success';
		notify_msg = 'Data berhasil dihapus';
	} else if ($('#success-code').val() == -4) {
		notify = 'error';
		notify_msg = 'Data gagal dihapus';
	}
	else if ($('#success-code').val() == 5)
	{
		notify = 'success';
		notify_msg = 'Data berhasil diunggah';
	}
	else
	{
		notify = '';
		notify_msg = '';
	}
	notification(notify, notify_msg);
	$('#success-code').val('');
});
</script>


<!-- NOTIFICATION--> 
<!--
<script type="text/javascript">
			$('document').ready(function()
			{
				setTimeout(function()
				{
					refresh_badge($("#b_permohonan_surat"), "<?= site_url('notif/permohonan_surat'); ?>");
					refresh_badge($("#b_komentar"), "<?= site_url('notif/komentar'); ?>");
					refresh_badge($("#b_inbox"), "<?= site_url('notif/inbox'); ?>");
				}, 500);
				if ($('#success-code').val() == 1)
				{
					notify = 'success';
					notify_msg = 'Data berhasil disimpan';
				}
				else if ($('#success-code').val() == -1)
				{
					notify = 'error';
					notify_msg = 'Data gagal disimpan <?= $_SESSION["error_msg"]?>';
				}
				else if ($('#success-code').val() == -2)
				{
					notify = 'error';
					notify_msg = 'Data gagal disimpan, nama id sudah ada!';
				}
				else if ($('#success-code').val() == -3)
				{
					notify = 'error';
					notify_msg = 'Data gagal disimpan, nama id sudah ada!';
				}
				else if ($('#success-code').val() == 4)
				{
					notify = 'success';
					notify_msg = 'Data berhasil dihapus';
				}
				else if ($('#success-code').val() == -4)
				{
					notify = 'error';
					notify_msg = 'Data gagal dihapus';
				}
				else
				{
					notify = '';
					notify_msg = '';
				}
				notification(notify, notify_msg);
				$('#success-code').val('');
			});
		</script>-->
<?php $_SESSION['success']=0; ?>
</body></html>