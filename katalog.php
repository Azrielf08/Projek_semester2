<?php
// Simple catalog array data
$catalogItems = [
    [
        'id' => 1,
        'name' => 'Elegant Chair',
        'description' => 'A comfortable and stylish chair perfect for any living room or workspace.',
        'price' => 120.00,
        'image' => 'https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=400&q=80'
    ],
    [
        'id' => 2,
        'name' => 'Modern Lamp',
        'description' => 'Brighten up your room with this sleek modern lamp design.',
        'price' => 75.50,
        'image' => 'https://images.unsplash.com/photo-1505692794403-8127d62b4fdf?auto=format&fit=crop&w=400&q=80'
    ],
    [
        'id' => 3,
        'name' => 'Wooden Table',
        'description' => 'Crafted from premium oak wood, this table adds warmth to your dining area.',
        'price' => 350.00,
        'image' => 'https://images.unsplash.com/photo-1493666438817-866a91353ca9?auto=format&fit=crop&w=400&q=80'
    ],
    [
        'id' => 4,
        'name' => 'Cozy Sofa',
        'description' => 'Spacious and comfortable sofa with soft cushions for ultimate relaxation.',
        'price' => 750.00,
        'image' => 'https://images.unsplash.com/photo-1505847002050-2926c70f5192?auto=format&fit=crop&w=400&q=80'
    ],
    [
        'id' => 5,
        'name' => 'Decorative Vase',
        'description' => 'Add a touch of elegance to your home with this beautiful decorative vase.',
        'price' => 45.20,
        'image' => 'https://images.unsplash.com/photo-1484154218962-a197022b5858?auto=format&fit=crop&w=400&q=80'
    ],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Katalog</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="theme/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="theme/dist/css/adminlte.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<style>
  .cart-container {
      position: relative;
      display: inline-block;
      margin: 20px;
    }

    .cart-icon {
      font-size: 40px;
      cursor: pointer;
    }

    .badge {
      position: absolute;
      top: -5px;
      right: -10px;
      background-color: red;
      color: white;
      border-radius: 50%;
      padding: 4px 8px;
      font-size: 14px;
      display: none;
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
    }
</style>
<body>
    <div class="container">
      <section class="content" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="simple-results.html">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here">
                            <div class="input-group-append" style="margin-top: -20px;">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="cart-container">
      <a href="keranjang.html">
        <img src="Cart.png" style="margin-left: 980px;">
        <span class="badge" id="cart-badge">0</span>
      </a>
    </div>

    <div class="card" style="width: 18rem; margin-top: 100px; margin-left:37px;">
        <img src="cake1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5>Cake</h5>
            <p>Rp35.000</p>
            <button onclick="addToCart('Cake', 35000, 'cake1.jpg')" class="btn btn-primary">Tambah ke Keranjang</button>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: -465px; margin-left: 422px;">
        <img src="cheescake.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5>Cheescake</h5>
            <p>Rp45.000</p>
            <button onclick="addToCart('Cheescake', 45000, 'cheescake.jpg')" class="btn btn-primary">Tambah ke Keranjang</button>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: -465px; margin-left: 810px;">
      <img src="cake2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Cake</h5>
        <p>Rp.45.000</p>
        <button onclick="addToCart('Cake', 45000, 'cake2.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
      </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: 65px; margin-left:37px;">
      <img src="cupcake1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Cupcake</h5>
        <p>Rp.35.000</p>
        <button onclick="addToCart('Cupcake', 35000, 'cupcake1.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
      </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: -465px; margin-left: 422px;">
      <img src="croissant.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Croissant</h5>
        <p>Rp.45.000</p>
        <button onclick="addToCart('Croissant', 45000, 'croissant.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
      </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: -465px; margin-left: 810px;">
      <img src="cupcake2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Cupcake</h5>
        <p>Rp.45.000</p>
        <button onclick="addToCart('Cupcake', 45000, 'cupcake2.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
      </div>
    </div>
</div>

<script>
    function addToCart(name, price, image) {
      // Ambil data keranjang yang sudah ada (jika ada), atau buat array baru
      let cart = JSON.parse(localStorage.getItem("cart") || "[]");
      // Buat objek produk baru
      let product = { name: name, price: price, image: image };
      // Tambahkan produk ke array
      cart.push(product);
      // Simpan kembali ke localStorage sebagai string JSON
      localStorage.setItem("cart", JSON.stringify(cart));
      alert(name + " berhasil ditambahkan ke keranjang!");
    }
</script> 

    <!-- jQuery -->
<script src="theme/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="theme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="theme/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="theme/dist/js/demo.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>