<?php
if (isset($_GET['no_anggota'])) {
    $no_anggota = $_GET['no_anggota'];

    $anggota = new Anggota();
    $anggota->hapusAnggota($no_anggota);

    header("Location: index.php?modul=anggota&aksi=tampil");
    exit;
} else {
    echo "Data anggota tidak ditemukan.";
}
