<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index', $data);
        $this->view('template/footer');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pengguna = $this->model('LoginModel')->cekDataLogin($username, $password);
        if ($pengguna) {
            Flasher::setFlash('berhasil', 'login', 'success');
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $pengguna['username'];
            header('Location: ' . BASEURL . '/post');
            exit;
        } else {
            Flasher::setFlash('gagal', 'login', 'danger');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function lupaPassword()
    {
        $data['judul'] = 'Lupa Password';
        $this->view('template/header', $data);
        $this->view('login/lupa', $data);
        $this->view('template/footer');
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
        exit;
    }


    public function gantiPassword()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordBaru = $_POST['passwordBaru'];
        if ($password == $passwordBaru) {
            if ($this->model('LoginModel')->ubahPassword($username, $password) > 0) {
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/login');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header('Location: ' . BASEURL . '/login/lupaPassword');
                exit;
            }
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/login/lupaPassword');
            exit;
        }
    }
}
