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
                            <div class="ml-auto text-right">Ubah Pencegahan</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="was-validated" action="<?= BASEURL ?>/tips/ubahDataTips" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="judul" class="text-dark">Kode Pencegahan</label>
                                <input type="text" readonly name="kode_tips" class="form-control" id="judul" value="<?= $data['ubahTips']['kode_tips'] ?>">
                            </div>
                            <div class="form-group has-validation">
                                <label for="judul" class="text-dark">Judul Pencegahan</label>
                                <input type="text" name="judul_tips" class="form-control" id="judul" value="<?= $data['ubahTips']['judul_tips'] ?>" aria-describedby="judul_tips" placeholder="isi dengan judul artikel">
                            </div>
                            <div class="form-group has-validation">
                                <label for="artikel" class="text-dark">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi_tips" id="artikel" placeholder="isi dengan artikel" rows="8"><?= $data['ubahTips']['deskripsi_tips'] ?></textarea>
                                <div class="invalid-feedback">Mohon tuliskan artikel</div>
                            </div>
                            <div class="form-group has-validation">
                                <label for="artikel" class="text-dark">Gambar</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= BASEURL; ?>/images/<?= $data['ubahTips']['gambar_tips']; ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambarInput" name="gambar_tips" style="display: none;">
                                                <label class="btn text-white custom-file-label" style=" background-color: #2e21df; font-weight: 400;" for="gambarInput">Unggah Gambar</label>
                                            </div>
                                            <div class="invalid-feedback">Mohon unggah gambar</div>
                                        </div>
                                    </div>
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
<script>
    $('.custom-file-input').on('change', function() {
        $(this).next('.custom-file-label').text($(this).val().split('\\').pop());
    });
</script>