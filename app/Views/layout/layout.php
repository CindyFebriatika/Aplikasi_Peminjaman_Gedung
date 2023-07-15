<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Daftar Peminjaman Gedung</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="/booking">Daftar Semua Gedung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pengajuan">Pengajuan Peminjaman Gedung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pengembalian">Pengembalian Peminjaman Gedung</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <?= $this->renderSection('content') ?>
</div>

<script class="/assets/js/bootstrap.min.js"></script>
</body>

</html>
