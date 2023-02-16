<?php

class About extends Controller
{
    public function index()
    {
        $data['judul'] = 'About';
        $this->view('template/header', $data);
        $this->view('about/index');
        $this->view('template/footer');
    }
    public function penjelasan()
    {
        $data['judul'] = 'penjelasan';
        $this->view('template/header', $data);
        $this->view('about/penjelasan', $data);
        $this->view('template/footer');
    }
}
