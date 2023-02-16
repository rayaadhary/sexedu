<!-- Course -->
<div class="course">
    <div class="container">
        <div class="row">
            <!-- Panels -->
            <div class="col">
                <div class="card mt-4 mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <a href="javascript:void(0)" class="btn text-white" style="background-color: #2e21df; font-weight: 400;" onclick="window.history.back();"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                        <div class="form_title">
                            <div class="ml-auto text-right">Ubah Berita</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="was-validated" action="<?= BASEURL ?>/post/ubahDataBerita" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="judul" class="text-dark">Kode Berita</label>
                                <input type="text" readonly name="kode_artikel" class="form-control" id="judul" value="<?= $data['ubahBerita']['kode_artikel'] ?>">
                            </div>
                            <div class="form-group has-validation">
                                <label for="judul" class="text-dark">Judul Berita</label>
                                <input type="text" name="judul_artikel" class="form-control" id="judul" value="<?= $data['ubahBerita']['judul_artikel'] ?>" aria-describedby="judul_artikel" placeholder="isi dengan judul artikel">
                            </div>
                            <div class="form-group has-validation">
                                <label for="artikel" class="text-dark">Berita</label>
                                <textarea class="form-control" name="deskripsi_artikel" id="artikel" placeholder="isi dengan artikel" rows="8"><?= $data['ubahBerita']['deskripsi_artikel'] ?></textarea>
                                <div class="invalid-feedback">Mohon tuliskan artikel</div>
                            </div>
                            <div class="form-group has-validation">
                                <label for="artikel" class="text-dark">Penjelasan</label>
                                <textarea class="form-control" name="penjelasan_artikel" id="artikel" placeholder="isi dengan artikel" rows="18"><?= $data['ubahBerita']['penjelasan_artikel'] ?></textarea>
                                <div class="invalid-feedback">
                                    Tuliskan Penjelasan Deskripsi
                                </div>
                            </div>
                            <div class="form-group has-validation">
                                <label for="artikel" class="text-dark">Gambar</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= BASEURL; ?>/images/<?= $data['ubahBerita']['gambar_artikel']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambarInput" name="gambar_artikel" style="display: none;">
                                                <label class="btn text-white custom-file-label" style=" background-color: #2e21df; font-weight: 400;" for="gambarInput">Unggah Gambar</label>
                                            </div>
                                            <div class="invalid-feedback">Mohon unggah gambar</div>
                                        </div>
                                    </div>
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
<script>
    $('.custom-file-input').on('change', function() {
        $(this).next('.custom-file-label').text($(this).val().split('\\').pop());
    });
</script>