<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h5 class="m-b-10">Ubah Data Mutasi Inventaris Jalan, Irigasi dan Jaringan</h5>
		<ul class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url() ?>inventaris_jalan/mutasi"><i class="fa fa-dashboard"></i>Daftar Mutasi Inventaris Jalan, Irigasi dan Jaringan</a></li>
			<li class="active">Ubah Data Mutasi</li>
		</ul>
	</div>
	<div class="card">
		<form class="form-horizontal" id="validasi" name="form_mutasi_jalan" method="post" action="<?= site_url("api_inventaris_jalan/update_mutasi/$main->id"); ?>">
			<div class="row">
				<div class="col-md-3">
					<?php $this->load->view('inventaris/menu_kiri.php')?>
				</div>
				<div class="col-md-9">
					
            <div class="card-header">
						<a href="<?= site_url() ?>inventaris_jalan/mutasi" class="btn btn-box btn-info btn-sm "><i class="fa fa-arrow-circle-left"></i> Kembali Ke Daftar Mutasi Inventaris Jalan, Irigasi dan Jaringan</a>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="col-sm-3 control-label required" style="text-align:left;" for="nama_barang">Nama Barang</label>
										<div class="col-sm-8">
											<input type="hidden" name="id" id="id" value="<?= $main->id; ?>">
											<input maxlength="50" value="<?= $main->nama_barang; ?>"  class="form-control input-sm required" name="nama_barang" id="nama_barang" type="text" disabled/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kode_barang">Kode Barang</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->kode_barang; ?>"  class="form-control input-sm required" name="kode_barang" id="kode_barang" type="text" disabled/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="nomor_register">Nomor Register</label>
										<div class="col-sm-8">
											<input maxlength="50" value="<?= $main->register; ?>"  class="form-control input-sm required" name="kode_barang" id="kode_barang" type="text" disabled/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="mutasi">Jenis Mutasi </label>
										<div class="col-sm-4">
											<select name="mutasi" id="mutasi" class="form-control input-sm required">
												<option value="<?= $main->jenis_mutasi; ?>">   <?= $main->jenis_mutasi;?></option>
												<option value="Rusak">Status Rusak</option>
												<option value="Diperbaiki">Status Diperbaiki</option>
												<optgroup label="Barang Masih Baik">
													<option value="Masih Baik Disumbangkan">Sumbangakan</option>
													<option value="Masih Baik Dijual">Jual</option>
												</optgroup>
												<optgroup label="Barang Sudah Rusak">
													<option value="Barang Rusak Disumbangkan">Sumbangakan</option>
													<option value="Barang Rusak Dijual">Jual</option>
												</optgroup>
											</select>
										</div>
									</div>
									<div class="form-group disumbangkan">
										<label class="col-sm-3 control-label" style="text-align:left;" for="sumbangkan">Disumbangkan ke-</label>
										<div class="col-sm-8">
											<input maxlength="50"  class="form-control input-sm" name="sumbangkan" id="sumbangkan" type="text" value="<?= $main->sumbangkan; ?>"/>
										</div>
									</div>
									<div class="form-group harga_jual">
										<label class="col-sm-3 control-label " style="text-align:left;" for="harga_jual">Harga Penjualan</label>
										<div class="col-sm-4">
											<input maxlength="50"  class="form-control input-sm number" name="harga_jual" id="harga_jual" type="text" value="<?= $main->harga_jual; ?>"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tahun">Tahun Pengadaan </label>
										<div class="col-sm-4">
											<select name="tahun" id="tahun" class="form-control input-sm required" disabled>
												<option value="<?= $main->tahun_pengadaan; ?>"><?= date('d M Y',strtotime($main->tanggal_dokument));?></option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label required" style="text-align:left;" for="tahun_mutasi">Tahun Mutasi</label>
										<div class="col-sm-4">
											<input type="date" maxlength="50" class="form-control input-sm required" name="tahun_mutasi" id="tahun_mutasi" value="<?= $main->tahun_mutasi; ?>" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
										<div class="col-sm-8">
											<textarea rows="5" class="form-control input-sm required" name="keterangan" id="keterangan" ><?= $main->keterangan; ?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="col-xs-12">
								<button type="reset" class="btn btn-box btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
								<button type="submit" class="btn btn-box btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
	$(document).ready(function()
	{
		if ($("#mutasi").val() == "Masih Baik Disumbangkan" | $("#mutasi").val() == "Barang Rusak Disumbangkan" )
		{
			$(".disumbangkan").show();
			$(".harga_jual").hide();
		} else if ($("#mutasi").val() == "Masih Baik Dijual" | $("#mutasi").val() == "Barang Rusak Dijual" )
		{
			$(".disumbangkan").hide();
			$(".harga_jual").show();
		} else if ($("#mutasi").val() == "Rusak" | $("#mutasi").val() == "Diperbaiki" )
		{
			$(".disumbangkan").hide();
			$(".harga_jual").hide();
		}

		$("#mutasi").change(function()
		{
			if ($("#mutasi").val() == "Masih Baik Disumbangkan" | $("#mutasi").val() == "Barang Rusak Disumbangkan" ){
				$(".disumbangkan").show();
				$(".harga_jual").hide();
			} else if ($("#mutasi").val() == "Masih Baik Dijual" | $("#mutasi").val() == "Barang Rusak Dijual" )
			{
				$(".disumbangkan").hide();
				$(".harga_jual").show();
			} else if ($("#mutasi").val() == "Rusak" | $("#mutasi").val() == "Diperbaiki" )
			{
				$(".disumbangkan").hide();
				$(".harga_jual").hide();
			}
		});
	});
</script>



