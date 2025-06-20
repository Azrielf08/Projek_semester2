<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>First Bites</title>
  
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="theme/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="theme/dist/css/adminlte.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

  <style>
    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background: url('roti toko.jpeg') no-repeat center;
      background-size: cover;
      height: 100vh;
      overflow: hidden;
    }

    
    .background-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      backdrop-filter: blur(8px);
      background-color: rgba(0, 0, 0, 0.3); 
      z-index: 0;
    }

    .content {
      position: relative;
      z-index: 1;
      max-width: 1000px;
      margin: 60px auto;
      padding: 60px 40px;
      color: #fff;
    }


    .overlay {
      width: 100%;
      height: 100vh;
      background: transparent; 
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 40px 80px;
    }


    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }


    header h2 {
      margin: 0;
      color: #ffffff;
      font-size: 2.5em;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
    }

  
    nav {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    nav a {

      margin-right: 20px;
      text-decoration: none;
      color: #ffefd5;
      font-weight: bold;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.6);
    }

    .login-button {
      background: transparent;
      border: 2px solid #ffefd5;
      color: #ffefd5;
      padding: 6px 12px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      text-decoration: none;
    }

    .login-button:hover {
      background: #ffefd5;
      color: black;
    }

    h1 {
      font-size: 2.5em;
      color: #ffffff;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    p {
      color: #f5f5dc;
      max-width: 600px;
      font-size: 1.2em;
      line-height: 1.6;
      margin-bottom: 30px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
    }

    
    nav {
      text-decoration: none;
      color: white;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 6px;
      transition: background 0.3s, color 0.3s;
    }

    .login-button {
      border: 2px solid #ffffff;
      color: #ffffff;
    }

    .login-button:hover {
      background: #dd7328;
      color: white;
    }

    nav a:not(.login-button):hover {
      color: #ffffff;
      background-color: rgba(255, 255, 255, 0.2);
    }

    main {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      max-width: 700px;
    }

    h1 {
      font-size: 3em;
      color: #ffffff;
      text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
      margin-bottom: 20px;
    }

    p {
      color: #ffffff;
      font-size: 1.2em;
      line-height: 1.6;
      margin-bottom: 30px;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    } 

    .btn {
      background: #dc4e4e;
      color: white;
      padding: 16px 32px;
      border: none;
      border-radius: 8px;
        font-size: 1em;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #b93c3c;

      font-size: 1.1em;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn:hover {
      background: #a0522d;
    }


    @media (max-width: 768px) {
      .overlay {
        padding: 30px 20px;
      }

      h1 {
        font-size: 2em;
      }

      header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
    }


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
</head>
<body>

  <!-- Blur seluruh layar -->
  <div class="background-overlay"></div>

  <!-- Konten utama -->
  <div class="content">
    <header>
      <h1 style="color: #ffffff;">First Bites</h1>
      <nav>
        <a href="sign in.html" class="login-button">Sign In</a>
        <a href="Index.html">Home</a>
        <a href="About-us.html">Tentang Kami</a>
      </nav>
    </header>
    <main>
      <h1>Rasakan manisnya kebahagiaan dalam setiap gigitan</h1>
      <p>Kami menyediakan berbagai pilihan kue manis dan gurih untuk melengkapi momen spesial Anda. Temukan yang paling cocok untuk Anda sekarang juga!</p>
      <button class="btn">Belanja Sekarang</button>
</main>
<div class="container">
    <div class="cart-container">
      <a href="checkout.html">
        <img src="Cart.png" style="margin-left: 980px;">
        <span class="badge" id="cart-badge">0</span>
      </a>
    </div>

    <div class="card" style="width: 18rem; margin-top: 100px; margin-left:37px;">
        <img src="cake.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5>Cake</h5>
            <p>Rp35.000</p>
            <button onclick="addToCart('Cake', 35000, 'cake.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: -465px; margin-left: 422px;">
        <img src="cheescake.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5>Cheescake</h5>
            <p>Rp45.000</p>
            <button onclick="addToCart('Cheescake', 45000, 'cheescake.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
        </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: -465px; margin-left: 810px;">
      <img src="cake_tart.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Cake Tart</h5>
        <p>Rp.45.000</p>
        <button onclick="addToCart('Cake Tart', 45000, 'cake_tart.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
      </div>
    </div>
    <div class="card" style="width: 18rem; margin-top: 65px; margin-left:37px;">
      <img src="cupcake.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Cupcake</h5>
        <p>Rp.35.000</p>
        <button onclick="addToCart('Cupcake', 35000, 'cupcake.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
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
      <img src="cookies.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Cookies</h5>
        <p>Rp.45.000</p>
        <button onclick="addToCart('Cookies', 45000, 'cookies.jpg')" class="btn btn-primary">Tambahkan ke Keranjang</button>
      </div>
    </div>
  </div>
  <script>
    function addToCart(name, price, image) {
      let cart = JSON.parse(localStorage.getItem("cart") || "[]");
      
      const existingProduct = cart.find(item => item.name === name);
      if (existingProduct) {
        existingProduct.quantity += 1;
      } else {
        cart.push({ name, price, image, quantity: 1 });
      }
      
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCartBadge(); 
    }

    function updateCartBadge() {
      let cart = JSON.parse(localStorage.getItem("cart") || "[]");
      const badge = document.getElementById("cart-badge");

      if (cart.length > 0) {
        badge.textContent = cart.length;
        badge.style.display = "inline-block";
      } else {
        badge.style.display = "none";
      }
    }

    window.onload = function () {
      updateCartBadge();
    };
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