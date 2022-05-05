
<div class="col-md-4">
  <div class="card latest-update-card">
    <div class="card-header">
      <h5 class="card-title">SPPT PBB</h5>
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
    	<div class="col-md-5 hidden-xs">
            <div id="canvas-holder">
                <canvas id="chart-area" width="50" height="50"/>
            </div>
        </div>

      <?php 
		if(isset($data)){ 
		$d = $data->row();
		?>
      <div class="description-block">
        <h2 style="color:green">
          <?=$d->presentase?>
          %</h2>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">Total <i class="fa fa-users"></i><strong> <?=$d->jumlah_nop?> NOP
            </strong>  <span class="pull-right label label-primary">
             <?=$d->total_tagih?> 
            </span></a></li>
          <li><a href="#">Lunas : <strong>
            <?=$d->lunas?>
            </strong> <i class="fa fa-users"></i> <span class="pull-right label bg-aqua">
            <?=$rupiah($d->pajak_lunas)?>
            </span></a></li>
          <li><a href="#">Terhutang : <strong>
            <?=$d->terhutang?>
            </strong> <i class="fa fa-users"></i> <span class="pull-right label label-danger">
            <?=$rupiah($d->pajak_terhutang)?>
            </span></a></li>
        </ul>
        <a href="<?= site_url('data_sppt/rekap')?>" class="btn btn-social btn-box bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block pull-right" title="Kembali"><i class="fa fa-search"></i> Detail</a> </div>
      <?php
		}
		?>
    </div>
  </div>
</div>


<script src="<?= base_url()?>assets/js/Chart.js"></script> 
<script>

		var doughnutData = [
				{
					value: "<?= $d->pajak_terhutang?>",
					color:"red",
					highlight: "#FF5A5E",
					label: "Belum Bayar"
				},
				{
					value: "<?= $d->pajak_lunas?>",
					color: "aqua",
					highlight: "#5AD3D1",
					label: "Lunas"
				},
				{
					value: 100,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Yellow"
				},
				{
					value: 40,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "Grey"
				},
				{
					value: 120,
					color: "#4D5360",
					highlight: "#616774",
					label: "Dark Grey"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
			};
</script>