<?php

class PostModel
{
    private $table1 = 'artikel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllArtikel()
    {
        $this->db->query('SELECT * FROM ' . $this->table1);
        $data = $this->db->resultSet();
        return $data;
    }



    public function getArtikelById($kode)
    {
        $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE kode_artikel=:kode_artikel');
        $this->db->bind('kode_artikel', $kode);
        $data = $this->db->single();
        return $data;
    }



    public function kodeArtikel()
    {
        // $this->db->query('SELECT max(Id_Anggota) as Kode  FROM anggota');
        $query = "SELECT max(kode_artikel) as Kode  FROM artikel";
        $data = $this->db->query($query);
        $data2 = $this->db->single($data);
        $kode = $data2['Kode'];
        $urutan = (int) substr($kode, 1, 5);

        $urutan++;
        $huruf = "B";
        $kodeAnggota = $huruf . sprintf("%05s", $urutan);
        return $kodeAnggota;
    }

    public function tambahDataBerita($data)
    {
        $kodeArtikel = $this->kodeArtikel();
        $gambar = $this->upload();
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO artikel VALUES (:kode_artikel, :judul_artikel, :deskripsi_artikel, :penjelasan_artikel, :gambar_artikel)";
        $this->db->query($query);
        $this->db->bind('kode_artikel', $kodeArtikel);
        $this->db->bind('judul_artikel', $data['judul_artikel']);
        $this->db->bind('deskripsi_artikel', $data['deskripsi_artikel']);
        $this->db->bind('penjelasan_artikel', $data['penjelasan_artikel']);
        $this->db->bind('gambar_artikel', $gambar);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function upload()
    {
        $namaFile = $_FILES['gambar_artikel']['name'];
        $ukuranFile = $_FILES['gambar_artikel']['size'];
        $error = $_FILES['gambar_artikel']['error'];
        $tmpName = $_FILES['gambar_artikel']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if ($error === 4) {
            echo "<script>
                        alert('pilih gambar terlebih dahulu');
                    </script>";
            return false;
        }


        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                        alert('yang anda upload bukan gambar');
                    </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if ($ukuranFile > 5242880) {
            echo "<script>
                        alert('ukuran gambar terlalu besar');
                    </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'images/' . $namaFileBaru);
        return $namaFileBaru;

        // cek apakah tidak ada gambar yang diupload
        if ($error === 4) {
            echo "<script>
                        alert('pilih gambar terlebih dahulu');
                    </script>";
            return false;
        }
    }
    // public function ubahDataArtikel($data)
    // {
    //     $kode = (int)$data['kode_artikel'];
    //     $artikel = $this->getArtikelById($kode);
    //     $gambar = $this->upload();
    //     if (!$gambar) {
    //         return false;
    //     }

    //     $query = "UPDATE artikel SET judul_artikel = :judul_artikel, deskripsi_artikel = :deskripsi_artikel, penjelasan_artikel = :penjelasan_artikel, gambar_artikel = :gambar_artikel WHERE kode_artikel = :kode_artikel";
    //     $this->db->query($query);
    //     if (!empty($data['judul_artikel'])) {
    //         $this->db->bind('judul_artikel', $data['judul_artikel']);
    //     } else {
    //         $this->db->bind('judul_artikel', $artikel['artikel']['judul_artikel'], PDO::PARAM_STR);
    //     }

    //     if (!empty($data['deskripsi_artikel'])) {
    //         $this->db->bind('deskripsi_artikel', $data['deskripsi_artikel']);
    //     } else {
    //         $this->db->bind('deskripsi_artikel', $artikel['artikel']['deskripsi_artikel'], PDO::PARAM_STR);
    //     }

    //     if (!empty($data['penjelasan_artikel'])) {
    //         $this->db->bind('penjelasan_artikel', $data['penjelasan_artikel']);
    //     } else {
    //         $this->db->bind('penjelasan_artikel', $artikel['artikel']['penjelasan_artikel'], PDO::PARAM_STR);
    //     }

    //     if (!empty($data['gambar_artikel']['name'])) {
    //         $this->db->bind('gambar_artikel', $gambar);
    //     } else {
    //         $this->db->bind('gambar_artikel', $artikel['artikel']['gambar_artikel']);
    //     }

    //     $this->db->bind('kode_artikel', $data['kode_artikel']);
    //     $this->db->execute();        
    //     return $this->db->rowCount();
    // } 

    public function ubahDataArtikel($data)
    {
        $kode = (int)$data['kode_artikel'];
        $gambarLama = $this->getArtikelById($kode);
        $gambar = $this->upload();
        if (!$gambar) {
            $gambar = $gambarLama['gambar_artikel'];
        }
        $query = "UPDATE artikel SET judul_artikel = :judul_artikel, deskripsi_artikel = :deskripsi_artikel, penjelasan_artikel = :penjelasan_artikel, gambar_artikel = :gambar_artikel WHERE kode_artikel = :kode_artikel";
        $this->db->query($query);

        if (!empty($data['judul_artikel'] || $data['deskripsi_artikel'] || $data['penjelasan_artikel'])) {
            $this->db->bind('judul_artikel', $data['judul_artikel']);
            $this->db->bind('deskripsi_artikel', $data['deskripsi_artikel']);
            $this->db->bind('penjelasan_artikel', $data['penjelasan_artikel']);
        } else {
            $this->db->bind('judul_artikel', 'judul_artikel', PDO::PARAM_STR);
            $this->db->bind('deskripsi_artikel', 'deskripsi_artikel', PDO::PARAM_STR);
            $this->db->bind('penjelasan_artikel', 'penjelasan_artikel', PDO::PARAM_STR);
        }

        if ($_FILES['gambar_artikel']['name'] != NULL) {
            $this->db->bind('gambar_artikel', $gambar);
        } else {
            $this->db->bind('gambar_artikel', $gambar, PDO::PARAM_STR);
        }
        $this->db->bind('kode_artikel', $data['kode_artikel']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataArtikel($id)
    {
        $this->db->query("DELETE FROM artikel WHERE kode_artikel = :kode_artikel");
        $this->db->bind('kode_artikel', $id);
        $this->db->execute();
    }
}
