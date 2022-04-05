<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <th><input type="text" name="kode" placeholder="Input Kode MTK" maxlength="10">
                        <?= form_error('kode', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <th><input type="text" name="nama" placeholder="Input Nama MTK" maxlength="10">
                        <?= form_error('nama', '<small style="color:red">', '</small>'); ?></th>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
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