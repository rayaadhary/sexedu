<?php

class Post extends Controller
{
  public function index()
  {
    $data['judul'] = 'Artikel';
    $data['artikel'] = $this->model('PostModel')->getAllArtikel();
    $this->view('template/header', $data);
    $this->view('post/index', $data);
    $this->view('template/footer');
  }

  public function detail($kode_artikel)
  {
    $data['judul'] = 'Detail Artikel';
    $data['kode_artikel'] = $kode_artikel;
    $data['artikel'] = $this->model('PostModel')->getArtikelById($kode_artikel);
    $this->view('template/header', $data);
    $this->view('post/detail', $data);
    $this->view('template/footer', $data);
  }

  public function tambahBerita()
  {
    $data['judul'] = 'Tambah Berita';
    $data['kode'] = $this->model('PostModel')->kodeArtikel();
    $this->view('template/header', $data);
    $this->view('post/tambahBerita', $data);
    $this->view('template/footer', $data);
  }

  public function tambahDataBerita()
  {
    if ($this->model('PostModel')->tambahDataBerita($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/post/berita');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/post/berita');
      exit;
    }
  }

  public function ubahBerita($kode)
  {
    if ($_SESSION['login'] != true) {
      header('Location: ' . BASEURL . '/post');
      exit;
    } else {
      $data['judul'] = 'Ubah Berita';
      $data['kode_berita'] = $kode;
      $data['ubahBerita'] = $this->model('PostModel')->getArtikelById($kode);
      $this->view('template/header', $data);
      $this->view('post/ubahBerita', $data);
      $this->view('template/footer', $data);
    }
  }

  public function ubahDataBerita()
  {
    if ($this->model('PostModel')->ubahDataArtikel($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/post/berita');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/post/berita');
      exit;
    }
  }

  public function hapusBerita($id)
  {
    $hapus = $this->model('PostModel')->hapusDataArtikel($id);
    if (!$hapus) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/post/berita');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/post/berita');
      exit;
    }
  }

  public function berita()
  {
    $data['judul'] = 'Mengelola Berita';
    $data['artikel'] = $this->model('PostModel')->getAllArtikel();
    $this->view('template/header', $data);
    $this->view('post/kelolaBerita', $data);
    $this->view('template/footer');
  }

}
