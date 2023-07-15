<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Form Pengajuan Pengembalian </title>
</head>
<body>
    <h1>Form Pengembalian Gedung</h1>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Pengembalian</th>
            <th>Bukti Pengembali</th>
        </tr>

        <?php $i = 1;
        foreach ($datapengembalian as $pengembalian) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <!--<td><?php echo $pengembalian['nama_pengembalian']; ?></td>-->
            <td><?= $pengembalian['bukti_pengembalian'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
