<html>

<head>
    <title>Form Input Data Siswa</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
</head>

<body>
    <form action="<?= base_url('form/cetak') ?>" method="post">
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
                <th>NIS</th>
                <th>:</th>
                <td>
                    <input type="text" name="nis" id="nis">
                </td>
            </tr>
            <tr>
                <th>
                    Nama Siswa
                </th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <input type="date" name="tanggallahir" id="tanggallahir">
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tempatlahir" id="tempatlahir">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <input type="radio" name="jeniskelamin" id="laki" value="laki"> Laki-laki
                    <input type="radio" name="jeniskelamin" id="perempuan" value="perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <th>:</th>
                <td>
                    <input type="checkbox" name="agama" id="islam" value="Islam"> Islam
                    <input type="checkbox" name="agama" id="kristen" value="Kristen"> Kristen
                    <input type="checkbox" name="agama" id="katolik" value="Katolik"> Katolik
                    <input type="checkbox" name="agama" id="buddha" value="Buddha"> Buddha
                    <input type="checkbox" name="agama" id="hindu" value="Hindu"> Hindu
                    <input type="checkbox" name="agama" id="protestan" value="Protestan"> Protestan
                    <input type="checkbox" name="agama" id="khonghucu" value="Khonghucu"> Khonghucu
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>