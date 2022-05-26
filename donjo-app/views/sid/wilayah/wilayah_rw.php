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
							<li class="breadcrumb-item"><a href="#!">Daftar RW</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="row">
				<div class="col-md-12">

					<div class="card-header text-center">
						<a href="<?= site_url("sid_core") ?>" class="btn btn-box btn-info mr-2 md-2" title="Kembali Ke Daftar RW"><i class="feather icon-arrow-left "></i>Kembali<a>
								<?php if ($this->CI->cek_hak_akses('h')) : ?>
									<a href="<?= site_url("sid_core/form_rw/$id_dusun") ?>" class="btn btn-icon btn-success btn-sm mr-2 md-2" title="Tambah Data"><i class="feather icon-plus"></i></a>
								<?php endif; ?>
								<a href="<?= site_url("sid_core/cetak_rw/$id_dusun") ?>" class="btn btn-icon btn-secondary btn-sm mr-2 md-2" title="Cetak Data" target="_blank"><i class="feather icon-printer "></i></a>
								<a href="<?= site_url("sid_core/excel_rw/$id_dusun") ?>" class="btn btn-icon btn-secondary btn-sm mr-2 md-2" title="Unduh Data" target="_blank"><i class="feather icon-download-cloud"></i></a>
					</div>

					<div class="card-body">
						<form id="mainform" name="mainform" action="" method="post">
							<h5>Daftar RW Wilayah <?= ucwords($this->setting->sebutan_dusun) ?> <?= $dusun ?></h5>
							<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<div class="table-responsive">
									<table class="table table-hover">
										<tr>
											<th class="padat">No</th>
											<th class="padat">Aksi</th>
											<th>RW</th>
											<th>Ketua RW</th>
											<th>NIK Ketua RW</th>
											<th>RT</th>
											<th>KK</th>
											<th>L+P</th>
											<th>L</th>
											<th>P</th>
										</tr>
										</thead>
										<tbody>
											<?php foreach ($main as $data) : ?>
												<tr>
													<td><?= $data['no'] ?></td>
													<td>
														<div class="btn-group mb-2 mr-2">
															<a href="<?= site_url("sid_core/sub_rt/$id_dusun/$data[id]") ?>"><button type="button" title="Rincian Sub Wilayah" class="btn btn-sm btn-success">Lihat RT</button></a>
															<button type="button" class="btn btn-sm btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span></button>
															<div class="dropdown-menu">
																<?php if ($this->CI->cek_hak_akses('u')) : ?>
																	<?php if ($data['rw'] != "-") : ?>
																		<a class="dropdown-item" href="<?= site_url("sid_core/form_rw/$id_dusun/$data[id]") ?>">Edit RW</a>
																	<?php endif; ?>
																	<a class="dropdown-item" href="<?= site_url("sid_core/ajax_kantor_dusun_maps_google/$data[id]") ?>" title="Lokasi Kantor">Lokasi Kantor</a>
																	<a class="dropdown-item" href="<?= site_url("sid_core/ajax_wilayah_dusun_maps_google/$data[id]") ?>" title="Peta Wilayah | Google">Peta Wilayah</a>
																	<div class="dropdown-divider"></div>
																	<?php if ($data['rw'] != "-") : ?>
																		<a class="dropdown-item" href="#!" data-href="<?= site_url("sid_core/delete/rw/$data[id]") ?>" data-toggle="modal" data-target="#confirm-delete" title="Hapus">Hapus</a>
																	<?php endif; ?>
																<?php endif; ?>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_kantor_rw_google_maps/$id_dusun/$data[id]") ?>" title="Lokasi Kantor">Lokasi Kantor RW</a>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_wilayah_rw_google_maps/$id_dusun/$data[id]") ?>" title="Peta Google">Wil. RW - Google</a>
																<a class="dropdown-item" href="<?= site_url("sid_core/ajax_wilayah_rw_openstreet_maps/$id_dusun/$data[id]") ?>" title="Peta Openstreet">Wil. RW - OSM</i></a>
															</div>
														</div>
													</td>
													<td><?= $data['rw'] ?></td>
													<?php if ($data['rw'] == "-") : ?>
														<td colspan="2">
															Pergunakan RW ini apabila RT berada langsung di bawah <?= ucwords($this->setting->sebutan_dusun) ?>, yaitu tidak ada RW
														</td>
													<?php else : ?>
														<td nowrap><strong><?= $data['nama_ketua'] ?></strong></td>
														<td><?= $data['nik_ketua'] ?></td>
													<?php endif; ?>
													<td><a href="<?= site_url("sid_core/sub_rt/$id_dusun/$data[id]") ?>" title="Rincian Sub Wilayah"><?= $data['jumlah_rt'] ?></a></td>
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
												<th><?= $total['jmlrt'] ?></th>
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