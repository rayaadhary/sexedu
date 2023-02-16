<?php
class Video extends Controller
{
  public function index()
  {
    $data['judul'] = 'Video';
    $data['video'] = $this->model('VideoModel')->getAllVideo();
    $this->view('template/header', $data);
    $this->view('video/index', $data);
    $this->view('template/footer');
  }
}
