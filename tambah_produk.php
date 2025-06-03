<?php
$koneksi = new mysqli("localhost", "root", "", "mengelola_produk");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok_barang'];

    $koneksi->query("INSERT INTO mengelola_produk (nama_produk, harga, stok_barang) 
                     VALUES ('$nama', '$harga', '$stok')");

    echo "<script>alert('Produk berhasil ditambahkan'); window.location.href='mengelola_produk.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #2196F3;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1976D2;
        }
        .back-link {
            margin-top: 10px;
            text-align: center;
        }
        .back-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk Baru</h2>
        <form method="POST">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" name="nama_produk" id="nama_produk" required>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" id="harga" required>

            <label for="stok_barang">Stok:</label>
            <input type="number" name="stok_barang" id="stok_barang" required>

            <button type="submit">Tambah Produk</button>
        </form>
        <div class="back-link">
            <a href="mengelola_produk.php">← Kembali</a>
        </div>
    </div>
</body>
</html>
