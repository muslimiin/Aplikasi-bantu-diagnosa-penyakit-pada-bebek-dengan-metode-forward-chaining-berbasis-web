<?php error_reporting(0)?>
<section id="content">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<h3 class="text-center"><?= $berita['judul'];?></h3>
				
				<span class="badge badge-danger" style="color:black"><?= date($berita['tglterbit']); ?></span>
				-
				<span class="badge badge-success" style="color:black"><?= $berita['kategori'];?></span>
					 <br>
					 <?= $berita['isiberita'];?>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				<a href="<?= base_url('tentangpage')?>" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	</div>
</section>