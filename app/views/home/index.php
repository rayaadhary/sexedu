      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2>KENAPA SEX EDUCATION ITU PENTING? </h2>
                     <p>Sebenarnya dalam bentuk apa sih sex education disampaikan di sekolah kita?
                        Apakah disisipkan dalam sesi pelajaran khusus cewek yaitu tentang kesehatan
                        wanita seperti seputar menstruasi (haid), penggunaan pembalut, kesehatan Miss V.
                        Atau disisipkan di pelajaran kesehatan lainnya yang membahas organ reproduksi dan pubertas? </P>
                     <a class="read_more" href="<?= BASEURL ?>/about/penjelasan">Baca lebih lengkap</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="images/about.png" alt="#" /></figure>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- end about -->

      <!-- protect -->
      <div class="protect">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Cara Menjaga Diri Sendiri</h2>
                     <p>Mari jaga diri sendiri untuk kesehatan dan masa depan bersama
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="protect_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!--  Demos -->
                     <div class="owl-carousel owl-theme">
                        <?php
                        foreach ($data['tips'] as $tips) {
                        ?>
                           <div class="item">
                              <div class="protect_box text_align_center">
                                 <div class="desktop">
                                    <i><img src="<?= BASEURL ?>/images/<?= $tips['gambar_tips'] ?>" alt="#" /></i>
                                    <h3> <?= $tips['judul_tips'] ?></h3>
                                    <span><?= $tips['deskripsi_tips']; ?></span>
                                 </div>
                              </div>
                           </div>
                        <?php
                        }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end protect -->
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
               array_splice($data['artikel'], 3);
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
      <div class="doctors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Menurut pandangan psikolog tentang edukasi seksual ..</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-6">
                  <div id="ho_efcet" class="reader text_align_center">
                     <i><img src="images/doctor1.png" alt="#" /></i>
                     <h3>Dr. Primatia Yogi Wulandari, M.Si</h3>
                     <p>Pendidikan seksual harus dilakukan secara kontinu dan tidak insidental.
                        Untuk memperkenalkan alat kelamin perihal fungsinya, saya sampaikan dengan
                        boneka tersebut karena mempunyai anggota tubuh yang lengkap. Jadi, anak bisa berdiskusi tanpa
                        rasa malu kepada orang tua. Kemudian, orang tua dapat membahas masalah seksualitas dari berbagai
                        aspek perkembangan, seperti kognitif, fisik, dan sosioemosional</p>
                     <span><img src="images/do.png" alt="#" /></span>
                  </div>
               </div>
               <div class=" col-md-6">
                  <div id="ho_efcet" class="reader text_align_center">
                     <i><img src="images/doctor2.png" alt="#" /></i>
                     <h3>Inez Kristanti, M.Psi</h3>
                     <p>Tujuan kita berkomunikasi kepada anak terkait seksualitas adalah supaya anak tahu informasi
                        yang benar dan bisa membuat keputusan secara bertanggung jawab. Dari kecil, sehingga orang tua dibiasakan open-minded. Nanti kalau sudah gede-gede nggak concern lagi. Biar nggak gelagapan (kalau ditanyai).</p>
                     <span><img src="images/do.png" alt="#" /></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->