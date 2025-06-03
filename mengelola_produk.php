<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");
$data = $koneksi->query("SELECT * FROM mengelola_produk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Produk</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #fff5f8;
      padding: 20px;
      display: flex;
      justify-content: center;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      max-width: 850px;
      background: #fff;
      box-shadow: 0 0 20px rgba(255, 105, 180, 0.2);
      border-radius: 6px;
    }
    thead {
      background-color: #2982ac;
      color: white;
    }
    thead th {
      padding: 12px 15px;
      text-align: left;
    }
    tbody tr:hover {
      background-color: #ffe0f0;
    }
    tbody td {
      padding: 25px 20px;
      border-bottom: 2px solid #f4ebef;
      border-right: 2px solid #2982ac;
    }
    tbody td:last-child {
      border-right: none;
    }
    button {
      border: none;
      border-radius: 5px;
      color: white;
      font-weight: bold;
      padding: 6px 12px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-right: 10px;
      font-size: 14px;
    }
    button.edit {
      background-color: #c63030;
    }
    button.edit:hover {
      background-color: #a02020;
    }
    button.delete {
      background-color: #2982ac;
    }
    button.delete:hover {
      background-color: #216b8c;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; while ($produk = $data->fetch_assoc()) { ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $produk['nama_produk'] ?></td>
          <td>Rp <?= number_format($produk['harga'], 0, ',', '.') ?></td>
          <td><?= $produk['stok_barang'] ?></td>
          <td>
            <a href="tabel.php?id=<?= $produk['id'] ?>">
              <button class="edit">Edit</button>
            </a>
            <a href="hapus.php?id=<?= $produk['id'] ?>" onclick="return confirm('Hapus produk ini?')">
              <button class="delete">Hapus</button>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>