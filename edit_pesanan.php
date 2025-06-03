<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM mengelola_pesanan WHERE id = $id")->fetch_assoc();

if (isset($_POST['update'])) {
    $nama_produk = $_POST['nama_produk'];
    $jumlah = (int) $_POST['jumlah'];
    $harga_satuan = (int) $_POST['harga_satuan'];
    $total_harga = $jumlah * $harga_satuan;

    $koneksi->query("UPDATE mengelola_pesanan SET 
        nama_produk = '$nama_produk', 
        jumlah = $jumlah, 
        total_harga = $total_harga 
        WHERE id = $id");

    header("Location: pesanan.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Pesanan</title>
</head>
<body>
  <h2>Edit Pesanan</h2>
  <form method="POST">
    <label>Nama Produk:</label><br>
    <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" required><br><br>

    <label>Jumlah:</label><br>
    <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" required><br><br>

    <label>Harga Satuan (masukkan ulang):</label><br>
    <input type="number" name="harga_satuan" required><br><br>

    <button type="submit" name="update">Update</button>
  </form>
</body>
</html>
