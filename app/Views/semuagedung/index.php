<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<center><h1>Data Semua Gedung</h1></center>

    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Kapasitas Gedung</th>
            <th>Foto Gedung</th>
            <th>Status Gedung</th>
            
        </tr>

        <?php $i = 1;
        foreach ($semuagedungs as $semuagedung) : ?>
        <tr>
            <td></td>
            <td> <?php echo $semuagedung['nama_gedung']; ?></td>
            <td><?= $semuagedung['kapasitas_gedung'] ?></td>
            <td><?= $semuagedung['foto_gedung'] ?></td>
            <td><?= $semuagedung['status_gedung'] ?></td>

        </tr>
        <?php endforeach; ?>
    </table>

<?= $this->endSection() ?>