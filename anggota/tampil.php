<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>No. Anggota</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($daftarAnggota as $anggota) {
            echo "<tr>";
            echo "<td style='text-align:center;'>" . $no++ . "</td>";
            echo "<td>" . $anggota['no_anggota'] . "</td>";
            echo "<td>" . $anggota['nama_anggota'] . "</td>";
            echo "<td>" . $anggota['alamat'] . "</td>";
            echo "<td style='text-align:center;'>" . $anggota['jenis_kelamin'] . "</td>";
            echo "<td><a href='index.php?modul=anggota&aksi=edit&no_anggota=" . $anggota['no_anggota'] . "'>Edit</a> | <a href='index.php?modul=anggota&aksi=hapus&no_anggota=" . $anggota['no_anggota'] . "' onclick='return confirm(\"Yakin ingin menghapus anggota ini?\")'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>