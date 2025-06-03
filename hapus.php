<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $koneksi->prepare("DELETE FROM mengelola_produk WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    } else {
        die("Gagal menyiapkan statement: " . $koneksi->error);
    }
}

header("Location: mengelola_produk.php");
exit;
?>
