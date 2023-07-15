<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<center><h1>Data Pengembalian Gedung</h1></center>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/pengembalian" class="btn btn-dark">Ajukan Pengembalian</a>

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
            <th>Nama Pengembali</th>
            <th>Bukti Pengembalian</th>
        </tr>

        <?php $i = 1;
        foreach ($pengembalians as $pengembalian) : ?>
        <tr>
            <td></td>
            <td> <?php echo $pengembalian['nama_pengembalian']; ?></td>
            <td><?= $pengembalian['bukti_pengembalian'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?= $this->endSection() ?>