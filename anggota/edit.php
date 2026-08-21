<?php
if (isset($_POST['update'])) {
    $no_anggota = $_POST['no_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];

    $anggota = new Anggota();
    $anggota->editAnggota($no_anggota, $nama_anggota, $tempat_lahir, $tanggal_lahir, $tanggal_daftar, $pekerjaan, $alamat, $jenis_kelamin);

    header("Location: index.php?modul=anggota&aksi=tampil");
    exit;
}

if (isset($_GET['no_anggota'])) {
    $no_anggota = $_GET['no_anggota'];
    $anggota = new Anggota();
    $data = $anggota->getAnggotaById($no_anggota);

    if (!$data) {
        echo "Data anggota tidak ditemukan.";
        exit;
    }
    ?>
    <h2>Edit Data Anggota</h2>
    <form method="post" action="index.php?modul=anggota&aksi=edit&no_anggota=<?= htmlspecialchars($data['no_anggota']) ?>">
        <table>
            <tr>
                <td>No. Anggota</td>
                <td>:</td>
                <td>
                    <input type="number" name="no_anggota" value="<?= htmlspecialchars($data['no_anggota']) ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_anggota" value="<?= htmlspecialchars($data['nama_anggota']) ?>" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?= ($data['jenis_kelamin'] == 'L') ? 'checked' : '' ?>
                        required> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P" <?= ($data['jenis_kelamin'] == 'P') ? 'checked' : '' ?>
                        required> Perempuan
                </td>
            </tr>

            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" required value="<?= $data['tempat_lahir']; ?>"></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir" required value="<?= $data['tanggal_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Daftar</td>
                <td>:</td>
                <td><input type="date" name="tanggal_daftar" required value="<?= $data['tanggal_daftar']; ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>
                    <select name="pekerjaan" required>
                        <option value="">Pilih Pekerjaan</option>
                        <option value="PNS" <?= ($data['pekerjaan'] == 'PNS') ? 'selected' : '' ?>>PNS</option>
                        <option value="Swasta" <?= ($data['pekerjaan'] == 'Swasta') ? 'selected' : '' ?>>Swasta</option>
                        <option value="Wiraswasta" <?= ($data['pekerjaan'] == 'Wiraswasta') ? 'selected' : '' ?>>Wiraswasta
                        </option>
                        <option value="Pendagang" <?= ($data['pekerjaan'] == 'Pendagang') ? 'selected' : '' ?>>Pendagang
                        </option>
                        <option value="Petani" <?= ($data['pekerjaan'] == 'Petani') ? 'selected' : '' ?>>Petani</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea name="alamat" required><?= htmlspecialchars($data['alamat']) ?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="update" value="Update">
                    <a href="index.php?modul=anggota&aksi=tampil">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
    <?php
} else {
    echo "Nomor anggota tidak tersedia.";
}
