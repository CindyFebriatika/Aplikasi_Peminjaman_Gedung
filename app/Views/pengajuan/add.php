<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Data Peminjaman Gedung</P></h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="/pengajuan" class="btn btn-dark">Tambahkan Pengajuan</a>
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
                            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control <?= isset($errors['nama_peminjam']) ? 'is-invalid ' : ''; ?>" id="nama_peminjam" name="nama_peminjam" value="<?= old('nama_peminjam'); ?>">
                            <?php if (isset($errors['nama_peminjam'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['nama_peminjam'] ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="text" class="form-control <?= isset($errors['npm']) ? 'is-invalid ' : ''; ?>" id="npm" name="npm" value="<?= old('npm'); ?>">
                            <?php if (isset($errors['npm'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['npm'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_gedung" class="form-label">Nama Gedung</label>
                            <input type="text" class="form-control <?= isset($errors['nama_gedung']) ? 'is-invalid ' : ''; ?>" id="nama_gedung" name="nama_gedung" value=" <?= old('nama_gedung'); ?>">
                            <?php if (isset($errors['nama_gedung'])) : ?>
                                <div class=" invalid-feedback">
                                    <?= $errors['nama_gedung'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="tujuan_peminjama" class="form-label">Tujuan Peminjaman</label>
                            <input type="text" class="form-control <?= isset($errors['tujuan_peminjaman']) ? 'is-invalid' : ''; ?>" id="tujuan_peminjaman" name="tujuan_peminjaman" value="<?= old('tujuan_peminjaman'); ?>">
                            <?php if (isset($errors['cover'])) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['tujuan_peminjaman'] ?>
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