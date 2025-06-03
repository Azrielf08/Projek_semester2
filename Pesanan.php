<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

$data = $koneksi->query("SELECT * FROM mengelola_pesanan");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pesanan</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
      padding: 20px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    .add-button {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      background-color: rgb(76, 125, 175);
      color: white;
      text-decoration: none;
      border-radius: 5px;
      text-align: center;
      width: fit-content;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    th, td {
      padding: 12px 20px;
      text-align: center;
      border-bottom: 1px solid #e0e0e0;
    }
    th {
      background-color: #2196F3;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    .edit, .delete {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: white;
    }
    .edit {
      background-color: rgb(76, 142, 175);
    }
    .delete {
      background-color: #f44336;
    }
  </style>
</head>
<body>
  <h2>Data Pesanan</h2>
  <a href="tambah_pesanan.php" class="add-button">+ Tambah Pesanan</a>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Jumlah Dibeli</th>
        <th>Total Harga</th>
        <th>Tanggal Pembelian</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; while ($pesanan = $data->fetch_assoc()) { ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($pesanan['nama_produk']) ?></td>
          <td><?= htmlspecialchars($pesanan['jumlah_produk']) ?></td>
          <td>Rp <?= number_format($pesanan['total_harga'], 0, ',', '.') ?></td>
          <td><?= htmlspecialchars($pesanan['tanggal_pembelian']) ?></td>
          <td>
            <a href="edit_pesanan.php?id=<?= $pesanan['id'] ?>">
              <button class="edit">Edit</button>
            </a>
            <a href="hapus_pesanan.php?id=<?= $pesanan['id'] ?>" onclick="return confirm('Hapus pesanan ini?')">
              <button class="delete">Hapus</button>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>
