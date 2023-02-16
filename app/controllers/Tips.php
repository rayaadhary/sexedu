<?php

class Tips extends Controller
{

  public function tips()
  {
    $data['judul'] = 'Mengelola Tips';
    $data['tips'] = $this->model('TipsModel')->getAllTips();
    $this->view('template/header', $data);
    $this->view('tips/kelolaTips', $data);
    $this->view('template/footer');
  }


  public function detailTips($kode_tips)
  {
    $data['judul'] = 'Detail Tips';
    $data['kode_tips'] = $kode_tips;
    $data['tips'] = $this->model('TipsModel')->getTipsById($kode_tips);
    $this->view('template/header', $data);
    $this->view('post/detailTips', $data);
    $this->view('template/footer', $data);
  }


  public function tambahTips()
  {
    $data['judul'] = 'Tambah Pencegahan';
    $data['kode'] = $this->model('TipsModel')->kodeTips();
    $this->view('template/header', $data);
    $this->view('tips/tambahTips', $data);
    $this->view('template/footer', $data);
  }

  public function tambahDataTips()
  {
    if ($this->model('TipsModel')->tambahDataTips($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/tips/tips');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/tips/tips');
      exit;
    }
  }


  public function ubahTips($kode)
  {
    if ($_SESSION['login'] != true) {
      header('Location: ' . BASEURL . '/tips');
      exit;
    } else {
      $data['judul'] = 'Ubah Tips';
      $data['kode_tips'] = $kode;
      $data['ubahTips'] = $this->model('TipsModel')->getTipsById($kode);
      $this->view('template/header', $data);
      $this->view('tips/ubahTips', $data);
      $this->view('template/footer', $data);
    }
  }


  public function ubahDataTips()
  {
    if ($this->model('TipsModel')->ubahDataPencegahan($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/tips/tips');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/tips/tips');
      exit;
    }
  }


  public function hapusTips($id)
  {
    $hapus = $this->model('TipsModel')->hapusDataPencegahan($id);
    if (!$hapus) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/tips/tips');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/tips/tips');
      exit;
    }
  }
}
