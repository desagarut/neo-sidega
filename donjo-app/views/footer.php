<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
	
	<!-- Js for google maps -->
	<script src="<?= base_url() ?>assets/js/plugins/gmaps.min.js"></script>
	<script src="<?= base_url() ?>assets/js/pages/google-maps.js"></script>            
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

	<!-- Required Js -->
	<script src="<?= base_url()?>assets/js/vendor-all.min.js"></script>
	<script src="<?= base_url()?>assets/js/ripple.js"></script>
	<script src="<?= base_url()?>assets/js/pcoded.min.js"></script>

	<script src="<?= base_url()?>assets/js/plugins/bootstrap.min.js"></script>
	<script src="<?= base_url()?>assets/js/plugins/apexcharts.min.js"></script>

	<script src="<?= base_url()?>assets/js/plugins/jquery-ui.min.js"></script>
	<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>


	<script src="<?= base_url()?>assets/js/analytics.js"></script>

	<script src="<?= base_url()?>assets/js/validasi.js"></script> 
	<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
	<script src="<?= base_url()?>assets/js/localization/messages_id.js"></script>
	<script src="<?= base_url()?>assets/js/numeral.min.js"></script>

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
	<script src="<?= base_url()?>assets/js/mapbox-gl.js"></script>
	<script src="<?= base_url()?>assets/js/leaflet-mapbox-gl.js"></script>
	<script src="<?= base_url()?>assets/js/shp.js"></script>
	<script src="<?= base_url()?>assets/js/leaflet.shpfile.js"></script>
	<script src="<?= base_url()?>assets/js/leaflet.groupedlayercontrol.min.js"></script>
	<script src="<?= base_url()?>assets/js/leaflet.browser.print.js"></script>
	<script src="<?= base_url()?>assets/js/leaflet.browser.print.utils.js"></script>
	<script src="<?= base_url()?>assets/js/leaflet.browser.print.sizes.js"></script>
	<script src="<?= base_url()?>assets/js/dom-to-image.min.js"></script>



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