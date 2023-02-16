    <!-- cases -->
    <div class="cases">
       <div class="container-fluid">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage text_align_center ">
                   <h2>Berita</h2>
                   <p>Berita terkini</p>
                </div>
             </div>
          </div>
          <div class="row d_flex">
             <?php

               foreach ($data['artikel'] as $data) {
               ?>
                <div class=" col-md-4">
                   <div class="latest text_align_center">
                      <figure><img src="<?= BASEURL ?>/images/<?= $data['gambar_artikel'] ?>" alt="#" /></figure>
                      <div class="nostrud">
                         <a href="<?= BASEURL ?>/post/detail/<?= $data['kode_artikel'] ?>">
                            <h3><?= $data['judul_artikel']; ?></h3>
                         </a>
                         <?php
                           if (strlen($data['deskripsi_artikel'] <= 100)) {
                           ?>
                            <p>
                               <?= $data['deskripsi_artikel']; ?>
                            </p>
                         <?php } else { ?>
                            <p>
                               <?= substr($data['deskripsi_artikel'], 0, 150) ?>
                               <br><a class="btn text-white" style="background-color: #05254D;" href="<?= BASEURL ?>/post/detail/<?= $data['kode_artikel'] ?>">Read More</a>
                            </p>
                         <?php } ?>
                      </div>
                   </div>
                </div>
             <?php
               }
               ?>
          </div>
       </div>
    </div>
    <!-- end cases -->