<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");
if (isset($_POST['simpan'])) {
    $nama_produk = $_POST['nama_produk'];
    $jumlah = (int) $_POST['jumlah'];
    $harga_satuan = (int) $_POST['harga_satuan'];
    $total_harga = $jumlah * $harga_satuan;
    $tanggal = date('Y-m-d');

    $koneksi->query("INSERT INTO mengelola_pesanan (nama_produk, jumlah, total_harga, tanggal_pembelian) 
                    VALUES ('$nama_produk', $jumlah, $total_harga, '$tanggal')");

    header("Location: Pesanan.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Pesanan</title>
</head>
<body>
  <h2>Tambah Pesanan</h2>
  <form method="POST">
    <label>Nama Produk:</label><br>
    <input type="text" name="nama_produk" required><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah" required><br><br>

    <label>Harga Satuan:</label><br>
    <input type="number" name="harga_satuan" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
  </form>
</body>
</html>
