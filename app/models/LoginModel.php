<?php

class LoginModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekDataLogin($username, $password)
    {
        $this->db->query('SELECT * FROM pengguna WHERE username=:username AND password=:password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $data = $this->db->single();
        return $data;
    }

    public function ubahPassword($username, $password)
    {
        $this->db->query('UPDATE pengguna SET password=:password WHERE username=:username');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
