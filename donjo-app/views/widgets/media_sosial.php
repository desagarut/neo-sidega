<!-- widget SocMed -->

<div class="box box-primary box-solid">
  <div class="card-header">
    <h3 class="box-title"><i class="fa fa-globe"></i> Info Media Sosial</h3>
  </div>
  <div class="card-body">
		<?php foreach ($sosmed As $data): ?>
		  <?php if (!empty($data["link"])): ?>
		    <a href="<?= $data['link']?>" target="_blank">
		    	<img src="<?= base_url().'assets/front/'.$data['gambar'] ?>" alt="<?= $data['nama'] ?>" style="width:50px;height:50px;"/>
		    </a>
		  <?php endif; ?>
		<?php endforeach; ?>
  </div>
</div>
