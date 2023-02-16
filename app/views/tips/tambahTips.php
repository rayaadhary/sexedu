<div class="super_container">

  <!-- Course -->

  <div class="course">
    <div class="container">


      <div class="row">

        <!-- Panels -->
        <div class="col">

          <div class="card mt-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <div class="form_title">Tambah Pencegahan</div>
            </div>
            <div class="card-body">
              <form class="was-validated" action="<?= BASEURL ?>/tips/tambahDataTips" method="post" enctype="multipart/form-data">
                <div class="form-group has-validation">
                  <label for="judul" class="text-dark">Kode Pencegahan</label>
                  <input type="text" name="kode_tips" value="<?= $data['kode'] ?>" class="form-control" id="judul" aria-describedby="judul" placeholder="" required readonly>
                  <div class="invalid-feedback">
                    Kode Otomatis Terisikan
                  </div>
                </div>
                <div class="form-group has-validation">
                  <label for="judul" class="text-dark">Judul Pencegahan</label>
                  <input type="text" name="judul_tips" class="form-control" id="judul" aria-describedby="judul" placeholder="isi dengan judul pencegahan" required>
                  <div class="invalid-feedback">
                    Tuliskan Judul Pencegahan
                  </div>
                </div>
                <div class="form-group has-validation">
                  <label for="artikel" class="text-dark">Deskripsi Pencegahan</label>
                  <textarea class="form-control" name="deskripsi_tips" id="artikel" placeholder="isi dengan deskripsi" rows="6" required></textarea>
                  <div class="invalid-feedback">
                    Tuliskan Deskripsi
                  </div>
                  <div class="form-group has-validation">
                    <input type="file" name="gambar_tips" id="" required>
                    <div class="invalid-feedback">
                      Unggah Gambar
                    </div>
                  </div>
                  <div class="mb-4">
                    <button class="btn btn-lg btn-block" style="background-color: #FFA8D3;" type="submit">Simpan Pencegahan</button>
                  </div>
              </form>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>