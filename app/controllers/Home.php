<?php

class Home extends Controller{
  public function index()
  {
      $data['judul'] = 'Home';
      $data['artikel'] = $this->model('PostModel')->getAllArtikel();
      $data['tips'] = $this->model('TipsModel')->getAllTips();
      $this->view('template/header', $data);
      $this->view('home/index', $data);
      $this->view('template/footer');
  }
}