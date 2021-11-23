<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampilan Data
                </th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
            <tr>
                <th>Kode</th>
                <th>:</th>
                <td><?= $kode; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>SKS</th>
                <th>:</th>
                <td><?= $sks; ?></td>
            </tr>
            <tr>
                <th colspan="3">
                    <a href="<?= base_url('Matakuliah') ?>">Kembali</a>
                </th>
            </tr>
        </table>
    </center>
</body>

</html>