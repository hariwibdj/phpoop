<?php
class Anggota extends Database
{

    public function getAllAnggota()
    {
        $query = $this->conn->query("SELECT * FROM tbl_anggota");
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
        $this->closeConnection();
    }

    public function getAnggotaById($no_anggota)
    {
        $query = $this->conn->query("SELECT * FROM tbl_anggota WHERE no_anggota = '$no_anggota'");
        return $query->fetch_assoc();
        $this->closeConnection();
    }

    public function cariAnggota($keyword)
    {
        $query = $this->conn->query("SELECT * FROM tbl_anggota WHERE no_anggota LIKE '%$keyword%' OR nama_anggota LIKE '%$keyword%'");
        while ($row = $query->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
        $this->closeConnection();
    }

    public function simpan($no_anggota, $nama_anggota, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $tanggal_daftar, $pekerjaan, $alamat)
    {
        $query = $this->conn->query("INSERT INTO tbl_anggota (no_anggota, nama_anggota,jenis_kelamin,tanggal_lahir,tempat_lahir,tanggal_daftar,pekerjaan, alamat) VALUES ('$no_anggota', '$nama_anggota', '$jenis_kelamin', '$tanggal_lahir', '$tempat_lahir', '$tanggal_daftar', '$pekerjaan', '$alamat')");
        return $query;
        $this->closeConnection();
    }

    public function editAnggota($no_anggota, $nama_anggota, $tempat_lahir, $tanggal_lahir, $tanggal_daftar, $pekerjaan, $alamat, $jenis_kelamin)
    {
        $query = $this->conn->query("UPDATE tbl_anggota SET nama_anggota = '$nama_anggota', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin' WHERE no_anggota = '$no_anggota'");
        return $query;
        $this->closeConnection();
    }

    public function hapusAnggota($no_anggota)
    {
        $query = $this->conn->query("DELETE FROM tbl_anggota WHERE no_anggota = '$no_anggota'");
        return $query;
        $this->closeConnection();
    }
}