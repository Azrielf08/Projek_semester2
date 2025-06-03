<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");
$id = $_GET['id'];
$koneksi->query("DELETE FROM mengelola_pesanan WHERE id = $id");
header("Location: pesanan.php");
?>
