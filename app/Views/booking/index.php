<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Daftar Semua Gedung</title>
</head>
<body>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Kapasitas Gedung</th>
            <th>Foto Gedung</th>
        </tr>
        <?php foreach ($booking as $booking) : ?>
        <tr>
            <td><?= $booking['nama_gedung'] ?></td>
            <td><?= $booking['kapasitas_gedung'] ?></td>
            <td><?= $booking['foto_gedung'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
