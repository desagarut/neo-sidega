<div class="pcoded-main-container">
	<div class="pcoded-content">

		<div class="page-header">
			<div class="page-block">
				<div class="row class-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Pengelolaan Data <?= ucwords($this->setting->sebutan_dusun) ?></h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?= site_url('beranda') ?>"><i class="feather icon-home"></i> Home</a></li>
							<li class="breadcrumb-item"><a href="<?= site_url('sid_core') ?>"> Daftar <?= ucwords($this->setting->sebutan_dusun) ?></a></li>
							<li class="breadcrumb-item"><a href="<?= site_url('sid_core/sub_rw/$id_dusun') ?>"> Daftar RW</a></li>
							<li class="breadcrumb-item"><a href="#!">Daftar RT</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="row">
				<div class="col-md-12">

					<div class="card-header text-center">
						<a href="<?= site_url("sid_core/sub_rw/$id_dusun") ?>" class="btn btn-box btn-info mr-2 md-2" title="Kembali Ke Daftar RW"><i class="feather icon-arrow-left "></i>Kembali<a>
								<?php if ($this->CI->cek_hak_akses('h')) : ?>
									<a href="<?= site_url("sid_core/form_rt/$id_dusun/$id_rw") ?>" class="btn btn-icon btn-success btn-sm mr-2 md-2" title="Tambah Data"><i class="feather icon-plus"></i></a>
								<?php endif; ?>
								<a href="<?= site_url("sid_core/cetak_rt/$id_dusun/$id_rw") ?>" class="btn btn-icon btn-secondary btn-sm mr-2 md-2" title="Cetak Data" target="_blank"><i class="feather icon-printer "></i></a>
								<a href="<?= site_url("sid_core/excel_rt/$id_dusun/$id_rw") ?>" class="btn btn-icon btn-secondary btn-sm mr-2 md-2" title="Unduh Data" target="_blank"><i class="feather icon-download-cloud"></i></a>
					</div>

					<div class="card-body table-border-style">
						<h5>Daftar RT Wilayah <?= ucwords($this->setting->sebutan_dusun) ?> <?= $dusun ?> - RW <?= $rw ?></h5>
						<form id="mainform" name="mainform" action="" method="post">
							<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th class="padat">No</th>
												<th class="padat">Aksi</th>
												<th>RT</th>
												<th width="30%">Ketua RT</th>
												<th>NIK Ketua RT</th>
												<th>KK</th>
												<th>L+P</th>
												<th>L</th>
												<th>P</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($main as $indeks => $data) : ?>
												<tr>
													<td><?= $indeks + 1 ?></td>
													<td>
													<div class="btn-group mb-2 mr-2">
															<a href="<?= site_url("sid_core/sub_rt/$id_dusun/$data[id]") ?>"><button type="button" title="Rincian Sub Wilayah" class="btn btn-sm btn-success">Aksi</button></a>
															<button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
															<div class="dropdown-menu">
																<?php if ($this->CI->cek_hak_akses('u')) : ?>
																	<?php if ($data['rt'] != "-") : ?>
																		<a class="dropdown-item" href="<?= site_url("sid_core/form_rt/$id_dusun/$id_rw/$data[id]") ?>">Edit RT</a>
																	<?php endif; ?>
																	<a class="dropdown-item" href="<?= site_url("sid_core/ajax_kantor_dusun_maps_google/$data[id]") ?>" title="Lokasi Kantor">Lokasi Kantor</a>
																	<a class="dropdown-item" href="<?= site_url("sid_core/ajax_wilayah_dusun_maps_google/$data[id]") ?>" title="Peta Wilayah | Google">Peta Wilayah</a>
																	<div class="dropdown-divider"></div>
																	<?php if ($data['rw'] != "-") : ?>
																		<a class="dropdown-item" href="#!" data-href="<?= site_url("sid_core/delete/rt/$data[id]") ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus">Hapus</a>
																	<?php endif; ?>
																<?php endif; ?>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_kantor_rt_maps/$id_dusun/$id_rw/$data[id]") ?>" title="Lokasi Kantor">Lokasi Kantor RW</a>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_wilayah_rt_google_maps/$id_dusun/$id_rw/$data[id]") ?>" title="Peta Google">Wil. RW - Google</a>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_wilayah_rt_openstreet_maps/$id_dusun/$id_rw/$data[id]") ?>" title="Peta Openstreet">Wil. RW - OSM</i></a>
															</div>
														</div>
													</td>
													<td><?= $data['rt'] ?></td>
													<td><strong><?= $data['nama_ketua'] ?></strong></td>
													<td><?= $data['nik_ketua'] ?></td>
													<td><?= $data['jumlah_kk'] ?></td>
													<td><?= $data['jumlah_warga'] ?></td>
													<td><?= $data['jumlah_warga_l'] ?></td>
													<td><?= $data['jumlah_warga_p'] ?></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
										<tfoot>
											<tr>
												<th colspan="5"><label>TOTAL</label></th>
												<th><?= $total['jmlkk'] ?></th>
												<th><?= $total['jmlwarga'] ?></th>
												<th><?= $total['jmlwargal'] ?></th>
												<th><?= $total['jmlwargap'] ?></th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('global/confirm_delete'); ?>