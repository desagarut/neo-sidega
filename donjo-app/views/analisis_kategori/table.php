<script>

	$(function()

	{

		var keyword = <?= $keyword?> ;

		$( "#cari" ).autocomplete(

		{

			source: keyword,

			maxShowItems: 10,

		});

	});

</script>

<div class="pcoded-main-container">
	<div class="pcoded-content">


	<div class="page-header">

		<h5 class="m-b-10">Pengaturan Kategori - <?= $analisis_master['nama']?></h5>

		<ul class="breadcrumb">

			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>

			<li><a href="<?= site_url('analisis_master')?>"> Master Analisis</a></li>

			<li><a href="<?= site_url()?>analisis_kategori/leave"><?= $analisis_master['nama']?></a></li>

			<li class="active">Pengaturan Kategori</li>

		</ul>

	</div>

	</div>

	<div class="card">

		<form id="mainform" name="mainform" action="" method="post">

			<div class="row">

				<div class="col-md-4 col-lg-3">

					<?php $this->load->view('analisis_master/left', $data);?>

				</div>

				<div class="col-md-8 col-lg-9">

					

            <div class="card-header">

							<a href="<?= site_url('analisis_kategori/form')?>" class="btn btn-box btn-success btn-sm " title="Tambah Kategori / Variabel Baru" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah Data Kategori Indikator"><i class="fa fa-plus"></i> Tambah Kategori/Variabel Baru</a>

							<a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform', '<?= site_url("analisis_kategori/delete_all/$p/$o")?>')" class="btn btn-box btn-danger btn-sm  hapus-terpilih"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>

							<a href="<?= site_url()?>analisis_kategori/leave" class="btn btn-box btn-info btn-sm "><i class="fa fa-arrow-circle-left "></i> Kembali Ke <?= $analisis_master['nama']?></a>

						</div>

						<div class="card-body">

							<div class="row">

								<div class="col-sm-12">

									<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">

										<form id="mainform" name="mainform" action="" method="post">

											<div class="row">

												<div class="col-sm-12">

													<div class="input-group input-group-sm pull-right">

														<input name="cari" id="cari" class="form-control" placeholder="Cari..." type="text" value="<?=html_escape($cari)?>" onkeypress="if (event.keyCode == 13){$('#'+'mainform').attr('action', '<?= site_url("analisis_kategori/search")?>');$('#'+'mainform').submit();}">

														<div class="input-group-btn">

															<button type="submit" class="btn btn-default" onclick="$('#'+'mainform').attr('action', '<?= site_url("analisis_kategori/search")?>');$('#'+'mainform').submit();"><i class="fa fa-search"></i></button>

														</div>

													</div>

												</div>

											</div>

											<div class="row">

												<div class="col-sm-12">

													<div class="table-responsive">

														<table class="table table-bordered table-striped dataTable table-hover nowrap">

															<thead class="bg-gray disabled color-palette">

																<tr>

																	<th><input type="checkbox" id="checkall"/></th>

																	<th>No</th>

																	<th>Aksi</th>

																	<?php if ($o==4): ?>

																		<th><a href="<?= site_url("analisis_kategori/index/$p/3")?>">Kategori/Variabel <i class='fa fa-sort-asc fa-sm'></i></a></th>

																	<?php elseif ($o==3): ?>

																		<th><a href="<?= site_url("analisis_kategori/index/$p/4")?>">Kategori/Variabel <i class='fa fa-sort-desc fa-sm'></i></a></th>

																	<?php else: ?>

																		<th><a href="<?= site_url("analisis_kategori/index/$p/4")?>">Kategori/Variabel <i class='fa fa-sort fa-sm'></i></a></th>

																	<?php endif; ?>

																</tr>

															</thead>

															<tbody>

																<?php foreach ($main as $data): ?>

																	<tr>

																		<td><input type="checkbox" name="id_cb[]" value="<?= $data['id']?>" /></td>

																		<td><?= $data['no']?></td>

																		<td nowrap>

																			<a href="<?= site_url("analisis_kategori/form/$p/$o/$data[id]")?>" class="btn bg-orange btn-box btn-sm"  title="Ubah Data Kategori Indikator"  data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Data Kategori Indikator"><i class='fa fa-edit'></i></a>

																			<a href="#" data-href="<?= site_url("analisis_kategori/delete/$p/$o/$data[id]")?>" class="btn bg-maroon btn-box btn-sm"  title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>

																		</td>

																		<td width="90%"><?= $data['kategori']?></td>

																	</tr>

																<?php endforeach; ?>

															</tbody>

															</tbody>

														</table>

													</div>

												</div>

											</div>

										</form>

										<div class="row">

											<div class="col-sm-6">

												<div class="dataTables_length">

													<form id="paging" action="<?= site_url("analisis_kategori")?>" method="post" class="form-horizontal">

														<label>

															Tampilkan

															<select name="per_page" class="form-control input-sm" onchange="$('#paging').submit()">

																<option value="20" <?php selected($per_page,20); ?> >20</option>

																<option value="50" <?php selected($per_page,50); ?> >50</option>

																<option value="100" <?php selected($per_page,100); ?> >100</option>

															</select>

															Dari

															<strong><?= $paging->num_rows?></strong>

															Total Data

														</label>

													</form>

												</div>

											</div>

											<div class="col-sm-6">

												<div class="dataTables_paginate paging_simple_numbers">

													<ul class="pagination">

														<?php if ($paging->start_link): ?>

															<li><a href="<?= site_url("analisis_kategori/index/$paging->start_link/$o")?>" aria-label="First"><span aria-hidden="true">Awal</span></a></li>

														<?php endif; ?>

														<?php if ($paging->prev): ?>

															<li><a href="<?= site_url("analisis_kategori/index/$paging->prev/$o")?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>

														<?php endif; ?>

														<?php for ($i=$paging->start_link;$i<=$paging->end_link;$i++): ?>

															<li <?=jecho($p, $i, "class='active'")?>><a href="<?= site_url("analisis_kategori/index/$i/$o")?>"><?= $i?></a></li>

														<?php endfor; ?>

														<?php if ($paging->next): ?>

															<li><a href="<?= site_url("analisis_kategori/index/$paging->next/$o")?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>

														<?php endif; ?>

														<?php if ($paging->end_link): ?>

															<li><a href="<?= site_url("analisis_kategori/index/$paging->end_link/$o")?>" aria-label="Last"><span aria-hidden="true">Akhir</span></a></li>

														<?php endif; ?>

													</ul>

												</div>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</form>

	</div>

</div>

<?php $this->load->view('global/confirm_delete');?>

