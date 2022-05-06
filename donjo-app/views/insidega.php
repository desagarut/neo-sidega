<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?=$this->setting->login_title
				. ' ' . ucwords($this->setting->sebutan_desa)
				. (($header['nama_desa']) ? ' ' . $header['nama_desa']: '')
				. get_dynamic_title_page_from_path();
			?>
</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- css neo -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
<?php if (is_file(LOKASI_LOGO_DESA ."favicon.ico")): ?>
<link rel="shortcut icon" href="<?= base_url()?><?=LOKASI_LOGO_DESA?>favicon.ico" />
<?php else: ?>
<link rel="shortcut icon" href="<?= base_url()?>favicon.ico" />
<?php endif; ?>
<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/validasi.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/localization/messages_id.js"></script>
<?php require __DIR__ .'/head_tags.php' ?>
</head>

<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container">
    <div class="card login-card">
      <div class="row no-gutters">
        <div class="col-md-8" style="padding-top:5px">
          <?php $this->load->view('peta') ?>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="brand-wrapper" align="center"> <a href="<?=site_url('first'); ?>"><img src="<?=gambar_desa($header['logo']);?>" alt="<?=$header['nama_desa']?>" class="img-responsive" style="max-width: 80px; max-height: 80px"/></a> </div>
            <h1 align="center" style="font-size:18px">Manajemen
              <?=ucwords($this->setting->sebutan_desa)?>
              <?=$header['nama_desa']?>
            </h1>
            <form id="validasi" class="login-form" action="<?=site_url('insidega/auth')?>" method="post" >
              <?php if ($this->session->insidega_wait == 1): ?>
              <div class="error login-footer-top">
                <p id="countdown" style="color:red; text-transform:uppercase"></p>
              </div>
              <?php else: ?>
              <div class="form-group mb-3">
                <input name="username" type="text" placeholder="Nama pengguna" <?php jecho($this->session->insidega_wait, 1, "disabled") ?> value="" class="form-username form-control required">
              </div>
              <div class="form-group mb-3">
                <input name="password" id="password" type="password" placeholder="Kata sandi" <?php jecho($this->session->insidega_wait, 1, "disabled") ?> value="" class="form-username form-control required">
              </div>
              <div class="form-group mb-3">
                <input type="checkbox" id="checkbox" class="form-checkbox">
                Tampilkan sandi </div>
              <br />
              <button type="submit" class="btn btn-primary text-right" >MASUK</button>
              <?php if ($this->session->insidega == -1 && $this->session->insidega_try < 4): ?>
              <div class="error">
                <p style="color:red; text-transform:uppercase">Login Gagal.<br />
                  Nama pengguna atau sandi yang Anda masukkan salah!<br />
                  <?php if ($this->session->insidega_try): ?>
                  Kesempatan mencoba
                  <?= ($this->session->insidega_try - 1); ?>
                  kali lagi.</p>
                <?php endif; ?>
              </div>
              <?php elseif ($this->session->insidega == -2): ?>
              <div class="error"> Redaksi belum boleh masuk, SID belum memiliki sambungan internet! </div>
              <?php endif; ?>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="credit pull-center" style="color:black">
      <marquee>
      <a href="https://desagarut.net" target="_blank">SIDeGa
      <?= AmbilVersi()?>
      </a>Inspirasi untuk desa & kelurahan di <a href="https://garutkab.go.id" target="_blank" style="color: #FFF">Kabupaten Garut</a>
      </marquee>
    </div>
  </div>
</main>

<!-- Required Js --> 
<script src="<?= base_url() ?>assets/js/vendor-all.min.js"></script> 
<script src="<?= base_url() ?>assets/js/plugins/bootstrap.min.js"></script> 
<script src="<?= base_url() ?>assets/js/ripple.js"></script> 
<script src="<?= base_url() ?>assets/js/pcoded.min.js"></script>
</body>
</html>
<script>

	function start_countdown(){
		var times = eval(<?= json_encode($this->session->insidega_timeout)?>) - eval(<?= json_encode(time())?>);
		var menit = Math.floor(times / 60);
		var detik = times % 60;
		timer = setInterval(function(){
			detik--;
			if (detik <= 0 && menit >=1){
				detik = 60;
				menit--;
			}
			if (menit <= 0 && detik <= 0){
				clearInterval(timer);
				location.reload();
			} else {
				document.getElementById("countdown").innerHTML = "<b>Gagal 3 kali silakan coba kembali dalam "+menit+" MENIT "+detik+" DETIK </b>";
			}
		}, 1000)
	}

	$('document').ready(function()
	{
		var pass = $("#password");
		$('#checkbox').click(function(){
			if (pass.attr('type') === "password"){
				pass.attr('type', 'text');
			} else {
				pass.attr('type', 'password')
			}
		});

		if ($('#countdown').length)
		{
			start_countdown();
		}
	});

</script>