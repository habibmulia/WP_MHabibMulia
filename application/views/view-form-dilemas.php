<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('dilemas/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <th><input type="text" name="nama" placeholder="Input Nama Siswa" maxlength="50">
                        <?= form_error('nama', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <th><input type="text" name="nis" placeholder="Input NIS" maxlength="10">
                        <?= form_error('nis', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <th><input type="text" name="kelas" placeholder="Input kelas" maxlength="10">
                        <?= form_error('kelas', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <th><input type="text" name="tanggal" placeholder="Input Tanggal Lahir" maxlength="10">
                        <?= form_error('tanggal', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <th><input type="text" name="tempat" placeholder="Input Tempat Lahir" maxlength="10">
                        <?= form_error('tempat', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <th><input type="text" name="alamat" placeholder="Input Alamat" maxlength="50">
                        <?= form_error('alamat', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" id="jk" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jk" id="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>