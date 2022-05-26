<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<script>
	$(function() {
		var keyword = <?= $keyword ?>;
		$("#cari").autocomplete({
			source: keyword,
			maxShowItems: 10,
		});
	});
</script>

<div class="pcoded-main-container">
	<div class="pcoded-content">

		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Wilayah Administratif <?= ucwords($this->setting->sebutan_dusun) ?></h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= site_url('beranda'); ?>"><i class="feather icon-home"></i></a></li>
							<?php foreach ($breadcrumb as $tautan) : ?>
								<li class="breadcrumb-item"><a href="<?= $tautan['link'] ?>">
										<?= $tautan['judul'] ?>
									</a></li>
							<?php endforeach; ?>
							<li class="breadcrumb-item"><a href="#!">Wilayah Administratif <?= ucwords($this->setting->sebutan_dusun) ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->

		<div class="card">
			<div class="row">
				<div class="col-md-12">
					<div class="card-header text-center">
						<?php if ($this->CI->cek_hak_akses('h')) : ?>
							<a href="<?= site_url('sid_core/form') ?>" class="btn btn-icon btn-success mr-2 mb-2" title="Tambah Data"><i class="feather icon-plus"></i></a>
						<?php endif; ?>
						<a href="<?= site_url("$this->controller/dialog/cetak") ?>" class="btn btn-icon btn-primary mr-2 mb-2" title=" Cetak Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Data"><i class="feather icon-printer"></i></a>
						<a href="<?= site_url("$this->controller/dialog/unduh") ?>" title="Unduh Data" class="btn btn-icon btn-warning mr-2 mb-2" title="Unduh Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Data"><i class="feather icon-download-cloud"></i></a>
						<div class="card-header-right">
							<div class="btn-group card-option">
								<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather icon-more-horizontal"></i> </button>
								<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
									<li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
									<li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
									<li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
									<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="card-body">
						<form id="mainform" name="mainform" action="" method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group input-group-sm pull-right">
										<input name="cari" id="cari" class="form-control" placeholder="Cari..." type="text" value="<?= html_escape($cari) ?>" onkeypress="if (event.keyCode == 13){$('#'+'mainform').attr('action','<?= site_url('sid_core/search') ?>');$('#'+'mainform').submit();};">
										<div class="input-group-btn">
											<button type="submit" class="btn btn-default" onclick="$('#'+'mainform').attr('action','<?= site_url("sid_core/search") ?>');$('#'+'mainform').submit();"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="table-responsive">
										<table class="table table-hover">
											<thead>
												<tr class="text-center">
													<th class="padat">No</th>
													<th wlass="padat">Aksi</th>
													<th width="25%"> <?= ucwords($this->setting->sebutan_dusun) ?></th>
													<th width="35%">Kepala <?= ucwords($this->setting->sebutan_dusun) ?></th>
													<th class="text-center">RW</th>
													<th class="text-center">RT</th>
													<th class="text-center">KK</th>
													<th class="text-center">L+P</th>
													<th class="text-center">L</th>
													<th class="text-center">P</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$total = array();
												$total['total_rw'] = 0;
												$total['total_rt'] = 0;
												$total['total_kk'] = 0;
												$total['total_warga'] = 0;
												$total['total_warga_l'] = 0;
												$total['total_warga_p'] = 0;
												foreach ($main as $data) :
												?>
													<tr>
														<td class="no_urut"><?= $data['no'] ?></td>
														<td nowrap>

														<div class="btn-group mb-2 mr-2">
														<a href="<?= site_url("sid_core/sub_rw/$data[id]") ?>"><button type="button" title="Rincian Sub Wilayah" class="btn btn-success btn-sm">Lihat RW</button></a>
															<button type="button" class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
															<div class="dropdown-menu">
															<?php if ($this->CI->cek_hak_akses('h')) : ?>
																<a class="dropdown-item" href="<?= site_url("sid_core/form/$data[id]") ?>">Edit</a>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_kantor_dusun_maps_google/$data[id]") ?>" title="Lokasi Kantor">Lokasi Kantor</a>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_wilayah_dusun_maps_google/$data[id]") ?>" title="Peta Wilayah | Google">Peta Wilayah</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#!" data-href="<?= site_url("sid_core/delete/dusun/$data[id]") ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus">Hapus</a>
																<?php endif; ?>
															</div>
														</div>

															<!--<a href="<?= site_url("sid_core/sub_rw/$data[id]") ?>" class="btn btn-success" title="Rincian Sub Wilayah"><i class="feather mr-2 icon-search"></i> RW</a>
															<?php if ($this->CI->cek_hak_akses('h')) : ?>
																<a href="<?= site_url("sid_core/form/$data[id]") ?>" type="button" class="btn btn-warning" title="Ubah"><i class="fa fa-edit"></i></a>
																<a href="#" data-href="<?= site_url("sid_core/delete/dusun/$data[id]") ?>" class="btn btn-danger" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="feather mr-2 icon-trash"></i></i></a>
																<a href="<?= site_url("sid_core/ajax_kantor_dusun_maps_google/$data[id]") ?>" class="btn btn-info" title="Lokasi Kantor"><i class="feather mr-2 icon-map-pin"></i></a>
																<a href="<?= site_url("sid_core/ajax_wilayah_dusun_maps_google/$data[id]") ?>" class="btn btn-primary" title="Peta Google"><i class="feather mr-2 icon-map"></i></a>
																<a href="<?= site_url("sid_core/ajax_wilayah_dusun_openstreet_maps/$data[id]") ?>" class="btn btn-info" title="Peta Openstreet"><i class="feather mr-2 icon-map"></i></a>
															<?php endif; ?>-->
														</td>
														<td><?= strtoupper($data['dusun']) ?></td>
														<td nowrap><strong><?= strtoupper($data['nama_kadus']) ?></strong> - <?= $data['nik_kadus'] ?></td>
														<td class="bilangan"><a href="<?= site_url("sid_core/sub_rw/$data[id]") ?>" title="Rincian Sub Wilayah"><?= $data['jumlah_rw'] ?></a></td>
														<td class="bilangan"><?= $data['jumlah_rt'] ?></td>
														<td class="bilangan"><a href="<?= site_url("sid_core/warga_kk/$data[id]") ?>"><?= $data['jumlah_kk'] ?></a></td>
														<td class="bilangan"><a href="<?= site_url("sid_core/warga/$data[id]") ?>"><?= $data['jumlah_warga'] ?></a></td>
														<td class="bilangan"><a href="<?= site_url("sid_core/warga_l/$data[id]") ?>"><?= $data['jumlah_warga_l'] ?></a></td>
														<td class="bilangan"><a href="<?= site_url("sid_core/warga_p/$data[id]") ?>"><?= $data['jumlah_warga_p'] ?></a></td>
													</tr>
												<?php
													$total['total_rw'] += $data['jumlah_rw'];
													$total['total_rt'] += $data['jumlah_rt'];
													$total['total_kk'] += $data['jumlah_kk'];
													$total['total_warga'] += $data['jumlah_warga'];
													$total['total_warga_l'] += $data['jumlah_warga_l'];
													$total['total_warga_p'] += $data['jumlah_warga_p'];
												endforeach;
												?>
											</tbody>
											<tfoot>
												<tr>
													<th colspan="4"><label>TOTAL</label></th>
													<th class="bilangan"><?= $total['total_rw'] ?></th>
													<th class="bilangan"><?= $total['total_rt'] ?></th>
													<th class="bilangan"><?= $total['total_kk'] ?></th>
													<th class="bilangan"><?= $total['total_warga'] ?></th>
													<th class="bilangan"><?= $total['total_warga_l'] ?></th>
													<th class="bilangan"><?= $total['total_warga_p'] ?></th>
												</tr>
											</tfoot>
										</table>
									</div>
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
</div>
<?php $this->load->view('global/confirm_delete'); ?>
