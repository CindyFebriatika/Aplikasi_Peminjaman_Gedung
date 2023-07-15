<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<center><h1>Data Semua Gedung</h1></center>
    
    </br>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Kapasitas Gedung</th>
            <th>Foto Gedung</th>
        </tr>

        <?php $i = 1;
        foreach ($semuadata as $semua_gedung) : ?>
        <tr>
            <td>$i++;</td>
            <td><?= $semua_gedung['nama_gedung'] ?></td>
            <td><?= $semua_gedung['kapasitas_gedung'] ?></td>
            <td>
                <img width="" src="/assets/cover/<?=$semua_gedung['cover']?>" alt="" class="">
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

<?= $this->endSection() ?>
