    <!-- cases -->
    <div class="cases">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="titlepage text_align_center ">
              <h2>Mengelola Data Pencegahan</h2>
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
            <a class="btn btn-primary" href="<?= BASEURL ?>/tips/tambahTips">Tambah Penceghanan</a>
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
                foreach ($data['tips'] as $data) {
                  $i++;
                ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $data['kode_tips']; ?></td> 
                    <td><?= $data['judul_tips']; ?></td>
                    <td><?= substr($data['deskripsi_tips'], 0, 100); ?></td>
                    <td align="center">
                      <a href="<?= BASEURL ?>/tips/ubahTips/<?= $data['kode_tips'] ?>" class="btn btn-success btn-sm " title="Ubah"><i class="fa fa-edit"></i></a>
                      <a href="<?= BASEURL ?>/tips/hapusTips/<?= $data['kode_tips'] ?>" class="btn btn-danger btn-sm hapus" title="Hapus"><i class="fa fa-trash"></i></a>
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