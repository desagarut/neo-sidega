<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h5 class="m-b-10">Dokumen / Kelengkapan Penduduk</h5>
		<ul class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('penduduk/clear')?>"> Daftar Penduduk</a></li>
			<li class="active">Dokumen / Kelengkapan Penduduk</li>
		</ul>
	</div>
	<div class="card">
		<div class="row">
			<div class="col-md-12">
				
					<div class="card-header">
						<a href="<?= site_url("penduduk/dokumen_form/$penduduk[id]")?>" title="Tambah Dokumen" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah Dokumen" class="btn btn-box bg-olive btn-sm "><i class='fa fa-plus'></i>Tambah Dokumen</a>
						<a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform','<?= site_url("penduduk/delete_all_dokumen/$penduduk[id]")?>')" class="btn btn-box	btn-danger btn-sm  hapus-terpilih"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
						<a href="<?= site_url("penduduk/detail/1/0/$penduduk[id]")?>" class="btn btn-box btn-info btn-sm "><i class="fa fa-arrow-circle-left"></i> Kembali Ke Biodata Penduduk</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover">
								<tbody>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;" >Nama Penduduk</td><td nowrap > : <?= $penduduk['nama']?></td>
									</tr>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px;" >NIK</td><td nowrap > :  <?= $penduduk['nik']?></td>
									</tr>
									<tr>
										<td nowrap style="padding-top : 10px;padding-bottom : 10px;" >Alamat</td><td nowrap > : <?= $penduduk['alamat']?> RT/RW :  <?= $penduduk['rt']?>/<?= $penduduk['rw']?> <?= strtoupper($this->setting->sebutan_dusun)?> :  <?= $penduduk['dusun']?> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<form id="mainform" name="mainform" action="" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered table-hover ">
														<thead class="bg-gray disabled color-palette">
															<tr>
																<th><input type="checkbox" id="checkall"></th>
																<th>No</th>
																<th >Aksi</th>
																<th>Nama Dokumen</th>
																<th>Jenis Dokumen</th>
																<th>Tanggal Upload</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($list_dokumen as $data): ?>
																<tr>
																	<td><input type="checkbox" name="id_cb[]" value="<?= $data['id']?>" ></td>
																	<td><?= $key+1?></td>
																	<td nowrap>
																		<a href="<?= base_url().LOKASI_DOKUMEN?><?= urlencode($data['satuan'])?>" class="btn bg-info btn-box btn-sm" rel=”noopener noreferrer” target="_blank" title="Buka Dokumen"><i class="fa fa-eye"></i></a>
																		<?php if(!$data['hidden']): ?>
																			<a href="<?= site_url("penduduk/dokumen_form/$penduduk[id]/$data[id]")?>" class="btn bg-orange btn-box btn-sm" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Data" title="Ubah Data"  title="Ubah Data"><i class="fa fa-edit"></i></a>
																			<a href="#" data-href="<?= site_url("penduduk/delete_dokumen/$penduduk[id]/$data[id]")?>" class="btn bg-maroon btn-box btn-sm"  title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																		<?php endif ?>
																	</td>
																	<td width="40%"><?= $data['nama']?></td>
																	<td width="30%"><?= $jenis_syarat_surat[$data['id_syarat']]['ref_syarat_nama']?></a></td>
																	<td nowrap><?= tgl_indo2($data['tgl_upload'])?></td>
																</tr>
																<?php endforeach; ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('global/confirm_delete');?>