<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Form Pengajuan Peminjaman </title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>

<div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h1>Semua film</h1>
                    </div>
                    <div class="col-6 text-end">
                        <a href="/booking/add" class="btn btn-primary">Tambahkan Data Film</a>
                    </div>
                </div>
            </div>
            
    <h1>Form Pengajuan Peminjaman Gedung</h1>
    <table border="1" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>NPM</th>
            <th>Nama Gedung</th>
            <th>Tujuan Peminjaman</th>
        </tr>

        <?php $i = 1;
        foreach ($datapengajuan as $pengajuan) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <!--<td><?php echo $pengajuan['nama_peminjam']; ?></td>-->
            <td><?= $pengajuan['npm'] ?></td>
            <td><?= $pengajuan['nama_gedung'] ?></td>
            <td><?= $pengajuan['tujuan_peminjaman'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
