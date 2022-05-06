<!-- Pengaturan Grafik (Graph) Data Statistik-->
<!--
<script type="text/javascript">
	var chart;
	$(document).ready(function()
	{
		chart = new Highcharts.Chart(
		{
			chart:
			{
				renderTo: 'chart',
				defaultSeriesType: 'column'
			},
			title:
			{
				text: ''
			},
			xAxis:
			{
				title:
				{
					text: '<?= ucwords($main['lblx']) ?>'
				},
        categories: [
					<?php foreach ($main['pengunjung'] as $data) : ?>
					['<?= ($main['lblx'] == 'Bulan') ? getBulan($data['Tanggal']) . " " . date('Y') : tgl_indo2($data['Tanggal']); ?>', ],
				<?php endforeach; ?>
					]
			},
			yAxis:
			{
				title:
				{
					text: 'Pengunjung (Orang)'
				}
			},
			legend:
			{
				layout: 'vertical',
        enabled:false
			},
			plotOptions:
			{
				series:
				{
          colorByPoint: true
        },
      column:
			{
				pointPadding: 0,
				borderWidth: 0
			}
		},
		series: [
		{
			shadow:1,
			border:1,
			data: [
				<?php foreach ($main['pengunjung'] as $data) : ?>
					['<?= ($main['lblx'] == 'Tanggal') ? getBulan($data['Tanggal']) . " " . date('Y') : tgl_indo2($data['Tanggal']); ?>',<?= $data['Jumlah'] ?>],
				<?php endforeach; ?>]
			}]
		});
	});
</script>
-->
<!-- Highcharts -->
<script src="<?= base_url() ?>assets/js/highcharts/exporting.js"></script>
<script src="<?= base_url() ?>assets/js/highcharts/highcharts-more.js"></script>

<div class="col-lg-4 col-md-12">
	<div class="card">
		<div class="card-header">
			<h5>Pengunjung Website</h5>
			<div class="card-header-right">
				<div class="btn-group card-option">
					<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="feather icon-more-horizontal"></i> </button>
					<ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
						<li class="dropdown-item full-card"><a href="<?= site_url("pengunjung") ?>"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
						<li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
						<li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
						<li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="card-body">
			<div id="line-chart-2"></div>
		</div>
	</div>
</div>

<script>
	$(function() {
		var lastDate = 0;
		var data = []

		function getDayWiseTimeSeries(baseval, count, yrange) {
			var i = 0;
			while (i < count) {
				var x = baseval;
				var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

				data.push({
					x,
					y
				});
				lastDate = baseval
				baseval += 86400000;
				i++;
			}
		}

		getDayWiseTimeSeries(new Date('11 Feb 2017 GMT').getTime(), 10, {
			min: 10,
			max: 90
		})

		function getNewSeries(baseval, yrange) {
			var newDate = baseval + 86400000;
			lastDate = newDate
			data.push({
				x: newDate,
				y: Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min
			})
		}

		function resetData() {
			data = data.slice(data.length - 10, data.length);
		}

		var options = {
			chart: {
				height: 300,
				type: 'line',
				animations: {
					enabled: true,
					easing: 'linear',
					dynamicAnimation: {
						speed: 2000
					}
				},
				toolbar: {
					show: false
				},
				zoom: {
					enabled: false
				}
			},
			dataLabels: {
				enabled: false
			},
			stroke: {
				curve: 'smooth'
			},
			series: [{
				data: data
			}],
			colors: ["#4680ff"],
			title: {
				text: 'Dynamic Updating Chart',
				align: 'left'
			},
			markers: {
				size: 0
			},
			xaxis: {
				type: 'datetime',
				range: 777600000,
			},
			yaxis: {
				max: 100
			},
			legend: {
				show: false
			},
		}

		var chart = new ApexCharts(
			document.querySelector("#line-chart-2"),
			options
		);

		chart.render();

		var dataPointsLength = 10;

		window.setInterval(function() {
			getNewSeries(lastDate, {
				min: 10,
				max: 90
			})

			chart.updateSeries([{
				data: data
			}])
		}, 2000)

		// every 60 seconds, we reset the data
		window.setInterval(function() {
			resetData()
			chart.updateSeries([{
				data
			}], false, true)
		}, 60000)
	});
</script>