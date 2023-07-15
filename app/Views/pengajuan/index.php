<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

    <center><h1>Data Peminjaman Gedung</h1></center>
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/pengembalian" class="btn btn-dark">Tambahkan Pengajuan</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </br>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>NPM</th>
            <th>Nama Gedung</th>
            <th>Tujuan Peminjaman</th>
        </tr>

        <?php $i = 1;
        foreach ($pengajuans as $pengajuan) : ?>
        <tr>
            <td></td>
            <td> <?php echo $pengajuan['nama_peminjam']; ?></td>
            <td><?= $pengajuan['npm'] ?></td>
            <td><?= $pengajuan['nama_gedung'] ?></td>
            <td><?= $pengajuan['tujuan_peminjaman'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?= $this->endSection() ?>
