<script>
	$(document).ready(function() {
		$('#cari').focus();
	});

	$(function() {
		$("#cari").autocomplete({
			source: function(request, response) {
				$.ajax({
					type: "POST",
					url: '<?= site_url("penduduk/autocomplete"); ?>',
					dataType: "json",
					data: {
						cari: request.term
					},
					success: function(data) {
						response(JSON.parse(data));
					}
				});
			},
			minLength: 2,
		});
	});
</script>

<style>
	.input-sm {
		padding: 4px 4px;
	}

	@media (max-width:780px) {
		.btn-group-vertical {
			display: block;
		}
	}

	.table-responsive {
		min-height: 400px;
	}
</style>


<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Data Penduduk</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= site_url('beranda'); ?>"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Data Penduduk</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->

		<!-- [ Main Content ] start -->
		<div class="row">
			<div class="col-xl-12 col-md-12">
				<div class="card">
						<div class="card-header">

							<?php if ($this->CI->cek_hak_akses('h')) : ?>
								<a href="<?= site_url('penduduk/form'); ?>" class="btn btn-primary  mb-2 mr-2" title="Tambah Data"><i class="fa fa-plus"></i> Penduduk Domisili</a>
								<a href="#confirm-delete" class="btn btn-danger mb-2 mr-2" title="Hapus Data Terpilih" onclick="deleteAllBox('mainform', '<?= site_url("penduduk/delete_all/$p/$o"); ?>')"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
							<?php endif; ?>

							<div class="btn-group mb-2 mr-2">
								<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi Lainnya</button>
								<div class="dropdown-menu">
										<!--<button type="button" class="btn  btn-primary" data-toggle="modal" data-target="#exampleModalLive">Launch demo modal</button>-->
									<a href="<?= site_url("penduduk/ajax_cetak/$o/cetak"); ?>" class="dropdown-item" title="Cetak Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Data"><i class="feather icon-printer"></i>&nbsp; Cetak</a>
									<a href="<?= site_url("penduduk/ajax_cetak/$o/unduh"); ?>" class="dropdown-item" title="Unduh Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Data"><i class="feather icon-download"></i>&nbsp; Unduh</a>
									<a href="<?= site_url("penduduk/ajax_adv_search"); ?>" class="dropdown-item" title="Pencarian Spesifik" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Pencarian Spesifik"><i class="feather icon-search"></i>&nbsp; Pencarian Spesifik</a>
									<a href="<?= site_url("penduduk/search_kumpulan_nik"); ?>" class="dropdown-item" title="Pilihan Kumpulan NIK" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Pilihan Kumpulan NIK"><i class="feather icon-users"></i>&nbsp; Pilihan Kumpulan NIK</a>
									<a href="<?= site_url("penduduk_log/clear"); ?>" class="dropdown-item" title="Log Data Penduduk"><i class="feather icon-book"></i>&nbsp; Log Penduduk</a>
								</div>
							</div>

							<a href="<?= site_url("{$this->controller}/clear"); ?>" class="btn btn-warning mb-2 mr-2"><i class="fa fa-refresh"></i>Bersihkan</a>

						</div>

						<div class="card-body">
							<form id="mainform" name="mainform" action="" method="post">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12 col-lg-12">
											<div class="form-group">
												<div class="input-group mb-3">
													<input name="cari" id="cari" class="form-control" placeholder="Cari Nama / NIK Penduduk" type="text" title="Pencarian berdasarkan nama penduduk" value="<?= html_escape($cari); ?>" onkeypress="if (event.keyCode == 13){$('#'+'mainform').attr('action', '<?= site_url("penduduk/filter/cari"); ?>');$('#'+'mainform').submit();}">
													<div class="input-group-append">
														<button type="submit" class="btn btn-success" onclick="$('#'+'mainform').attr('action', '<?= site_url("penduduk/filter/cari"); ?>');$('#'+'mainform').submit();"><i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="table-border-style">
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr>
													<th class="text-center">
														<div class="chk-option">
															<label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
																<input type="checkbox" class="custom-control-input" id="checkall">
																<span class="custom-control-label"></span>
															</label>
														</div>

														<!--<input type="checkbox" id="checkall" />-->
													</th>
													<th class="text-center">No</th>
													<th class="text-center">Aksi</th>
													<th class="text-center"><?= url_order($o, "{$this->controller}/{$func}/$p", 1, 'NIK'); ?></th>
													<th class="text-center"><?= url_order($o, "{$this->controller}/{$func}/$p", 3, 'Nama'); ?></th>
													<th class="text-center"><?= url_order($o, "{$this->controller}/{$func}/$p", 7, 'Umur'); ?></th>
													<th class="text-center"><?= url_order($o, "{$this->controller}/{$func}/$p", 11, 'Oleh'); ?></th>
												</tr>
											</thead>
											<tbody>
												<?php if ($main) : ?>
													<?php foreach ($main as $key => $data) : ?>
														<tr>
															<td class="text-center">
																<div class="chk-option">
																	<label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
																		<input type="checkbox" class="custom-control-input" name="id_cb[]" value="<?= $data['id']; ?>">
																		<span class="custom-control-label"></span>
																	</label>
																</div>
															</td>
															<td class="text-center"><?= ($key + $paging->offset + 1); ?></td>
															<td>
																<div class="btn-group mb-2 mr-2">
																	<a href="<?= site_url("penduduk/detail/$p/$o/$data[id]"); ?>" class="btn btn-success" title="Lihat Detail">Lihat</a>
																	<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
																	<div class="dropdown-menu">

																		<a href="<?= site_url("penduduk/detail/$p/$o/$data[id]"); ?>" class="btn btn-primary dropdown-item"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
																		<?php if ($data['status_dasar'] == 9) : ?>
																			<a href="#" data-href="<?= site_url("penduduk/kembalikan_status/$p/$o/$data[id]"); ?>" class="btn btn-primary dropdown-item" data-remote="false" data-toggle="modal" data-target="#confirm-status"><i class="fa fa-undo"></i> Kembalikan ke Status HIDUP</a>
																		<?php endif; ?>

																		<?php if ($data['status_dasar'] == 1) : ?>
																			<?php if ($this->CI->cek_hak_akses('u')) : ?>
																				<a href="<?= site_url("penduduk/form/$p/$o/$data[id]"); ?>" class="btn btn-primary dropdown-item"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
																			<?php endif; ?>

																			<!--<a href="#" data-href="<?= site_url("penduduk/delete/$p/$o/$data[id]"); ?>" class="btn btn-danger dropdown-item" data-toggle="modal" data-target="#confirm-delete"><i class="feather icon-trash"></i>&nbsp; Hapus</a>-->
																			<a href="#" data-href="<?= site_url("penduduk/ajax_penduduk_maps_google/$p/$o/$data[id]/0"); ?>" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#modalBox" title="Lokasi <?= $data['nama'] ?> " data-title="Lokasi <?= $data['nama'] ?> - <?= strtoupper($data['dusun']); ?>, RW <?= $data['rw']; ?> / RT <?= $data['rt']; ?>"><i class="feather icon-map"></i> Lokasi Tempat Tinggal</a>
																			<!--<a href="<?= site_url("penduduk/ajax_penduduk_maps_google/$p/$o/$data[id]/0"); ?>" title="Lokasi <?= $data['nama'] ?> - <?= strtoupper($data['dusun']); ?>, RW <?= $data['rw']; ?> / RT <?= $data['rt']; ?>" class="btn btn-primary"><i class='fa fa-map-marker'></i> Lokasi Tempat Tinggal</a>-->

																			<?php if ($this->CI->cek_hak_akses('h')) : ?>
																				<a href="<?= site_url("penduduk/edit_status_dasar/$p/$o/$data[id]"); ?>" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-primary dropdown-item"><i class='fa fa-sign-out'></i> Ubah Status Dasar</a>
																			<?php endif; ?>

																			<a href="<?= site_url("penduduk/dokumen/$data[id]"); ?>" class="btn btn-primary dropdown-item"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>

																			<a href="<?= site_url("penduduk/rumah_form/$data[id]"); ?>" title="Tambah rumah" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah rumah" class="btn btn-primary dropdown-item"><i class='fa fa-plus'></i> Tambah Rumah</a>

																			<a href="<?= site_url("penduduk/cetak_biodata/$data[id]"); ?>" target="_blank" class="btn btn-primary dropdown-item"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
																			<?php if ($this->CI->cek_hak_akses('h')) : ?>
																				<a href="#" data-href="<?= site_url("penduduk/delete/$p/$o/$data[id]"); ?>" class="btn btn-danger dropdown-item" data-toggle="modal" data-target="#confirm-delete"><i class="feather icon-trash"></i>&nbsp; Hapus</a>
																			<?php endif; ?>
																		<?php endif; ?>
																		</ul>
																	</div>
																</div>
															</td>
															<td class="text-center">
																<img class="img-radius wid-60 align-top m-r-15" alt="Foto Penduduk" src="<?= AmbilFoto($data['foto'], '', $data['id_sex']) ?>" /><br />
																NIK: <a href="<?= site_url("penduduk/detail/$p/$o/$data[id]"); ?>" id="test" name="<?= $data['id']; ?>"><?= $data['nik']; ?></a><br />
																KK: <a href="<?= site_url("keluarga/kartu_keluarga/$p/$o/$data[id_kk]"); ?>"><?= $data['no_kk']; ?> </a><br />
																ID card: <?= $data['tag_id_card']; ?> <br />
																ID RTM: <a href="<?= site_url("rtm/anggota/$data[id_rtm]"); ?>"><?= $data['no_rtm']; ?></a>
															</td>
															<td>
																<strong><?= strtoupper($data['nama']); ?></strong></br>
																Ayah: <?= $data['nama_ayah']; ?></br>
																Ibu: <?= $data['nama_ibu']; ?><br />
																Alamat: <?= strtoupper($data['alamat']); ?>, RT <?= $data['rt']; ?> / RW <?= $data['rw']; ?> Dusun <?= strtoupper($data['dusun']); ?><br />
																Status: <?= $data['kawin']; ?><br />
																Pekerjaan: <?= $data['pekerjaan']; ?><br />
																Pendidikan: <?= $data['pendidikan']; ?>
															</td>
															<td class="text-center">
																<strong><?= $data['umur']; ?></strong> tahun<br />
																<?= $data['sex']; ?><br />
																<small style="color:#03F"><?= $data['tempatlahir']; ?>, <?= strtoupper($data['tanggallahir']); ?></small>
															</td>
															<td><?= $data['nama_pendaftar']; ?><br /><small><?= $data['created_at']; ?></small></td>
														</tr>
													<?php endforeach; ?>
												<?php else : ?>
													<tr>
														<td class="text-center" colspan="20">Data Tidak Tersedia</td>
													</tr>
												<?php endif; ?>
											</tbody>
										</table>
									</div>
								</div>
								<?php $this->load->view('global/paging'); ?>
							</form>
						</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('global/confirm_delete'); ?>
<?php $this->load->view('global/konfirmasi'); ?>


<div class='modal fade' id='confirm-status' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
				<h4 class='modal-title' id='myModalLabel'><i class='fa fa-exclamation-triangle text-red'></i> Konfirmasi</h4>
			</div>
			<div class='modal-body btn-info'>
				Apakah Anda yakin ingin mengembalikan status data penduduk ini?
			</div>
			<div class='modal-footer'>
				<button type="button" class="btn btn-social btn-box btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
				<a class='btn-ok'>
					<button type="button" class="btn btn-social btn-box btn-info btn-sm" id="ok-status"><i class='fa fa-check'></i> Simpan</button>
				</a>
			</div>
		</div>
	</div>
</div><!--
<div id="confirm-status" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalBox">Modal Title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p class="mb-0">Apakah Anda yakin ingin mengembalikan status data penduduk ini?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn  btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn  btn-primary" id="ok-status">Simpan</button>
			</div>
		</div>
	</div>
</div>
-->