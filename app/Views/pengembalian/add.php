<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Data Pengembalian Gedung</P></h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/pengajuan" class="btn btn-dark">Ajukan Pengembalian</a>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/pengajuan" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <form action="/booking/store" method="POST" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-6">
                            <label for="nama_peminjam" class="form-label">Nama Pengembali</label>
                            <input type="text" class="form-control <?= isset($errors['nama_peminjam']) ? 'is-invalid ' : ''; ?>" id="nama_peminjam" name="nama_peminjam" value="<?= old('nama_peminjam'); ?>">
                            <?php if (isset($errors['nama_peminjam'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['nama_peminjam'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_gedung" class="form-label">Bukti Pengembalian</label>
                            <input type="text" class="form-control <?= isset($errors['nama_gedung']) ? 'is-invalid ' : ''; ?>" id="nama_gedung" name="nama_gedung" value=" <?= old('nama_gedung'); ?>">
                            <?php if (isset($errors['nama_gedung'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['nama_gedung'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary mt-5">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>