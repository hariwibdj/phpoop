<form method="post" action="index.php?modul=anggota&aksi=simpan">
    <table>
        <tr>
            <td>No. Anggota</td>
            <td>:</td>
            <td><input type="number" name="no_anggota" required maxlength="5"> </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama_anggota" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" required>Laki-laki
                <input type="radio" name="jenis_kelamin" value="P" required>Perempuan

            </td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" required></td>
        </tr>

        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" required></td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td>:</td>
            <td><input type="date" name="tanggal_daftar" required></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>
                <select name="pekerjaan" required>
                    <option value="">Pilih Pekerjaan</option>
                    <option value="PNS">PNS</option>
                    <option value="Swasta">Swasta</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Pendagang">Pendagang</option>

                    <option value="Petani">Petani</option>
                </select>
            </td>
        </tr>


        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" required></textarea></td>
        </tr>

        <tr>
            <td colspan="3"><input type="submit" value="Simpan"></td>
        </tr>
    </table>