<div class="super_container">

  <!-- Course -->

  <div class="course">
    <div class="container">


      <div class="row">

        <!-- Panels -->
        <div class="col">

          <div class="card mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <div class="form_title">Tambah Berita</div>
            </div>
            <div class="card-body">
              <form class="was-validated" action="<?= BASEURL ?>/post/tambahDataBerita" method="post" enctype="multipart/form-data">
                <div class="form-group has-validation">
                  <label for="kode" class="text-dark">Kode Berita</label>
                  <input type="text" name="kode_artikel" value="<?= $data['kode'] ?>" class="form-control" id="kode" aria-describedby="kode" readonly>
                  <div class="invalid-feedback">
                    Tuliskan Judul
                  </div>
                </div>
                <div class="form-group has-validation">
                  <label for="judul" class="text-dark">Judul Berita</label>
                  <input type="text" name="judul_artikel" class="form-control" id="judul" aria-describedby="judul" placeholder="isi dengan judul berita" required>
                  <div class="invalid-feedback">
                    Tuliskan Judul
                  </div>
                </div>
                <div class="form-group has-validation">
                  <label for="artikel" class="text-dark">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi_artikel" id="artikel" placeholder="isi dengan deskripsi" rows="6" required></textarea>
                  <div class="invalid-feedback">
                    Tuliskan Deskripsi
                  </div>
                  <div class="form-group has-validation">
                    <label for="artikel" class="text-dark">Penjelasan</label>
                    <textarea class="form-control" name="penjelasan_artikel" id="artikel" placeholder="isi dengan awalan <br> dan akhiran </br> per tiap paragraf, misal: <br>Tulisakan Deskripsi</br> <br>Tuliskan Penjelasan</br>" rows="18" required></textarea>
                    <div class="invalid-feedback">
                      "Tuliskan Penjelasan Deskripsi
                    </div>
                  </div>
                  <div class="form-group has-validation">
                    <input type="file" name="gambar_artikel" id="" required>
                    <div class="invalid-feedback">
                      Unggah Gambar
                    </div>
                  </div>
                  <div class="mb-4">
                    <button class="btn btn-lg btn-block" style="background-color: #FFA8D3;" type="submit">Simpan Berita</button>
                  </div>
              </form>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>