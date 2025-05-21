<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pembayaran</title>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="theme/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="theme/dist/css/adminlte.min.css">

  <style>
    #imagePreview {
      max-width: 300px;
      margin-top: 10px;
      display: none;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <section class="content" style="margin-left: 430px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Pembayaran</h3>
            </div>

            <!-- Form Start -->
            <form enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <label for="address">Alamat</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Alamat" required>
                </div>

                <!-- Upload bukti pembayaran -->
                <div class="form-group">
                  <label for="paymentProof">Bukti Pembayaran</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="paymentProof" name="paymentProof" accept="image/*" required>
                      <label class="custom-file-label" for="paymentProof">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                  <img id="imagePreview" src="#" alt="Image Preview" />
                  <p id="fileDetails" class="mt-2 text-muted"></p>
                  
                </div>

                <!-- Metode Pembayaran -->
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="qris" value="qris">
                    <label class="form-check-label" for="qris">Qris</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="card" value="card" checked>
                    <label class="form-check-label" for="card">Kartu</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod">
                    <label class="form-check-label" for="cod">Cod</label>
                  </div>
                </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>

                <div class="button mt-3">
                  <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                </div>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

  <script>
    $(function () {
      const fileInput = $('#paymentProof');
      const imagePreview = $('#imagePreview');
      const fileDetails = $('#fileDetails');
      const downloadBtn = $('#downloadBtn');
      let currentImageUrl = '';

      fileInput.on('change', function (e) {
        const file = e.target.files[0];
        if (!file) {
          imagePreview.hide();
          fileDetails.text('');
          downloadBtn.addClass('d-none');
          if (currentImageUrl) URL.revokeObjectURL(currentImageUrl);
          $('.custom-file-label').text('Choose file');
          return;
        }

        if (!file.type.startsWith('image/')) {
          alert('Please upload a valid image file.');
          fileInput.val('');
          $('.custom-file-label').text('Choose file');
          return;
        }

        $('.custom-file-label').text(file.name);
        if (currentImageUrl) URL.revokeObjectURL(currentImageUrl);
        currentImageUrl = URL.createObjectURL(file);
        imagePreview.attr('src', currentImageUrl).show();
        fileDetails.text(File name: ${file.name} | Size: ${(file.size / 1024).toFixed(2)} KB);
        downloadBtn.removeClass('d-none');
      });

      downloadBtn.on('click', function () {
        if (!currentImageUrl) return;
        const a = document.createElement('a');
        a.href = currentImageUrl;
        a.download = fileInput[0].files[0].name;
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
      });
    });
  </script>
</body>
</html>