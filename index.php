<?php
spl_autoload_register(function ($class) {
    require_once 'class/' . $class . '.php';
});


$anggota = new Anggota;
$daftarAnggota = $anggota->getAllAnggota();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP CRUD</title>
</head>

<body>
    <h1>Aplikasi Koperasi Simpan Pinjam</h1>
    <p style="margin-top:-20px;">Alamat Jl. Z.A. Pagar Alam No. 93 Bandar Lampung</p>
    <hr />
    <p> <a href="index.php">Home :: </a>
        <a href="index.php?modul=anggota&aksi=tambah">Tambah Data Anggota ::</a>
        <a href="index.php?modul=anggota&aksi=tampil">Tampil Data Anggota ::</a>
        <a href="index.php?modul=anggota&aksi=cari">Cari Data Anggota</a>
    </p>
    <hr />
    <div style="min-height:750px; margin-top: 30px;">
        <?php
        if (isset($_GET['modul'])) {
            $modul = $_GET['modul'];
            $aksi = $_GET['aksi'];
            include($_GET['modul'] . "/" . $_GET['aksi'] . ".php");

        } else {
            echo "<h2 style='text-align:center; padding-top: 375px;'>Selamat Datang di Aplikasi Koperasi Simpan Pinjam</h2>";
        }
        ?>


    </div>
    <hr />
    <p style="text-align:center;">Copyright &copy; 2024 - Aplikasi Koperasi Simpan Pinjam</p>

</body>

</html>