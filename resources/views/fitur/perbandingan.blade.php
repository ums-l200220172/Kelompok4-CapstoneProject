<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar Data Lahan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
    }
    .header-bar {
      background-color: #f1f1f1;
      border-bottom: 1px solid #ddd;
    }
    .breadcrumb-text {
      font-size: 16px;
    }
    .table th, .table td {
      vertical-align: middle;
      text-align: center;
    }
    .btn-sm {
      padding: 4px 12px;
      font-size: 14px;
    }
    .btn-primary {
      background-color: #0044ff;
    }
    .btn-success {
      background-color: #28d17c;
      border-color: #28d17c;
    }
    .btn-warning {
      background-color: #ffd33d;
      border-color: #ffd33d;
      color: black;
    }
    .btn-danger {
      background-color: #f44336;
      border-color: #f44336;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <div class="header-bar py-2 px-4 d-flex justify-content-between align-items-center">
    <div class="breadcrumb-text">
      <strong>Sistem Rekomendasi Pemupukan</strong> &nbsp;&gt;&nbsp; <span class="text-muted">rekomendasi pupuk</span>
    </div>
    <div class="d-flex align-items-center gap-2">
      <a href="#" class="btn btn-outline-dark btn-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path d="M8 .5l6 6V15a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V9H8v6a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6.5l6-6z"/>
        </svg>
      </a>
      <a href="#" class="btn btn-primary btn-sm">Logout</a>
    </div>
  </div>

  <!-- Content -->
  <div class="container py-4">
    <h3 class="fw-bold mb-4">Daftar Data Lahan</h3>

    <!-- Search and Add -->
    <div class="d-flex justify-content-between mb-3">
      <div class="input-group w-50">
        <input type="text" class="form-control" placeholder="Cari data">
        <button class="btn btn-primary">cari</button>
      </div>
      <button class="btn btn-primary">Tambah Data Lahan</button>
    </div>

    <!-- Table -->
    <table class="table table-bordered">
      <thead class="table-light">
        <tr>
          <th>No.</th>
          <th>Jenis Tanah</th>
          <th>Jenis Tanaman</th>
          <th>Kondisi Cuaca</th>
          <th>Metode Pengairan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Lempung</td>
          <td>Gandum</td>
          <td>Sawi</td>
          <td>Irigasi Permukaan</td>
          <td>
            <button class="btn btn-success btn-sm">Detail</button>
            <button class="btn btn-warning btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
