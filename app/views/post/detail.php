 <div class="about">
 	<div class="container_width">
 		<div class="row d_flex">
 			<div class="col-md-4">
 				<div class="about_img text_align_center">
 					<figure><img src="<?= BASEURL ?>/images/<?= $data['artikel']['gambar_artikel'] ?>" alt="#" /></figure>
 				</div>
 			</div>
 			<div class="col-md-13">
 				<div class="titlepage text_align_left">
 					<h2><?= $data['artikel']['judul_artikel']; ?></h2>
 					<p class=text-justify>
 						<?= $data['artikel']['penjelasan_artikel']; ?>
 					</p>
 					<a class="read_more" href="<?= BASEURL ?>/post">Kembali</a>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>