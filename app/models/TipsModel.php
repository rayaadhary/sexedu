<?php

class TipsModel
{
    private $table2 = 'tips';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTips()
    {
        $this->db->query('SELECT * FROM ' . $this->table2);
        $data = $this->db->resultSet();
        return $data;
    }

    public function getTipsById($kode)
    {
        $this->db->query('SELECT * FROM ' . $this->table2 . ' WHERE kode_tips=:kode_tips');
        $this->db->bind('kode_tips', $kode);
        $data = $this->db->single();
        return $data;
    }

    public function kodeTips()
    {
        // $this->db->query('SELECT max(Id_Anggota) as Kode  FROM anggota');
        $query = "SELECT max(kode_tips) as Kode  FROM tips";
        $data = $this->db->query($query);
        $data2 = $this->db->single($data);
        $kode = $data2['Kode'];
        $urutan = (int) substr($kode, 1, 5);

        $urutan++;
        $huruf = "T";
        $kodeAnggota = $huruf . sprintf("%05s", $urutan);
        return $kodeAnggota;
    }

    public function tambahDataTips($data)
    {
        $kodeTips = $this->kodeTips();
        $gambar = $this->uploadTips();
        if (!$gambar) {
            return false;
        }

        $query = "INSERT INTO tips VALUES (:kode_tips, :judul_tips, :deskripsi_tips, :gambar_tips)";
        $this->db->query($query);
        $this->db->bind('kode_tips', $kodeTips);
        $this->db->bind('judul_tips', $data['judul_tips']);
        $this->db->bind('deskripsi_tips', $data['deskripsi_tips']);
        $this->db->bind('gambar_tips', $gambar);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function uploadTips()
    {
        $namaFile = $_FILES['gambar_tips']['name'];
        $ukuranFile = $_FILES['gambar_tips']['size'];
        $error = $_FILES['gambar_tips']['error'];
        $tmpName = $_FILES['gambar_tips']['tmp_name'];
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

    public function ubahDataPencegahan($data)
    {
        $kode = (int)$data['kode_tips'];
        $gambarLama = $this->getTipsById($kode);
        $gambar = $this->uploadTips();
        if (!$gambar) {
            $gambar = $gambarLama['gambar_tips'];
        }
        $query = "UPDATE tips SET judul_tips = :judul_tips, deskripsi_tips = :deskripsi_tips, gambar_tips = :gambar_tips WHERE kode_tips = :kode_tips";
        $this->db->query($query);

        if (!empty($data['judul_tips'] || $data['deskripsi_tips'])) {
            $this->db->bind('judul_tips', $data['judul_tips']);
            $this->db->bind('deskripsi_tips', $data['deskripsi_tips']);
        } else {
            $this->db->bind('judul_tips', 'judul_tips', PDO::PARAM_STR);
            $this->db->bind('deskripsi_tips', 'deskripsi_tips', PDO::PARAM_STR);
        }

        if ($_FILES['gambar_tips']['name'] != NULL) {
            $this->db->bind('gambar_tips', $gambar);
        } else {
            $this->db->bind('gambar_tips', $gambar, PDO::PARAM_STR);
        }
        $this->db->bind('kode_tips', $data['kode_tips']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPencegahan($id)
    {
        $this->db->query("DELETE FROM tips WHERE kode_tips = :kode_tips");
        $this->db->bind('kode_tips', $id);
        $this->db->execute();
    }
}
