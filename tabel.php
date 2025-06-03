<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan.");
}

$id = intval($_GET['id']);
$stmt = $koneksi->prepare("SELECT * FROM mengelola_produk WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$produk = $result->fetch_assoc();
$stmt->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok_barang'];

    $stmt = $koneksi->prepare("UPDATE mengelola_produk SET nama_produk = ?, harga = ?, stok_barang = ? WHERE id = ?");
    $stmt->bind_param("sdii", $nama, $harga, $stok, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: mengelola_produk.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Produk</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color:rgb(76, 135, 175);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color:rgb(69, 131, 160);
    }

    .back-link {
      text-align: center;
      margin-top: 10px;
    }

    .back-link a {
      text-decoration: none;
      color: #888;
      font-size: 14px;
    }

    .back-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Edit Produk</h2>
    <form method="post">
      <label>Nama Produk:</label>
      <input type="text" name="nama_produk" value="<?= htmlspecialchars($produk['nama_produk']) ?>" required>

      <label>Harga:</label>
      <input type="number" name="harga" value="<?= htmlspecialchars($produk['harga']) ?>" required>

      <label>Stok:</label>
      <input type="number" name="stok_barang" value="<?= htmlspecialchars($produk['stok_barang']) ?>" required>

      <button type="submit">Simpan Perubahan</button>
    </form>
    <div class="back-link">
      <a href="mengelola_produk.php">← Kembali ke daftar produk</a>
    </div>
  </div>
</body>
</html>
