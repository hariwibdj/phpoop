<?php
// var_dump($_POST);
$anggota = new Anggota;
$anggota->simpan($_POST['no_anggota'], $_POST['nama_anggota'], $_POST['jenis_kelamin'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['tanggal_daftar'], $_POST['pekerjaan'], $_POST['alamat']);
header("location:index.php?modul=anggota&aksi=tampil");

?>