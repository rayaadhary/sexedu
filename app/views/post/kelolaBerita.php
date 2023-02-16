    <!-- cases -->
    <div class="cases">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage text_align_center ">
              <h2>Mengelola Data Berita</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <?php Flasher::flash(); ?>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-12">
            <a class="btn btn-primary" href="<?= BASEURL ?>/post/tambahBerita">Tambah Berita</a>
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Kode </th>
                  <th>Judul </th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = 0;
                foreach ($data['artikel'] as $data) {
                  $i++;
                ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $data['kode_artikel']; ?></td>
                    <td><?= $data['judul_artikel']; ?></td>
                    <td><?= substr($data['deskripsi_artikel'], 0, 100); ?></td>
                    <td align="center">
                      <a href="<?= BASEURL ?>/post/ubahBerita/<?= $data['kode_artikel'] ?>" class="btn btn-success btn-sm " title="Ubah"><i class="fa fa-edit"></i></a>
                      <a href="<?= BASEURL ?>/post/hapusBerita/<?= $data['kode_artikel'] ?>" class="btn btn-danger btn-sm hapus" title="Hapus"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- end cases -->