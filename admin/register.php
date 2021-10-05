<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Daftar</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/admin.min.css" rel="stylesheet">

</head>

<body style="background: #CCCC;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <i class="fas fa-user h1"></i>
                    <h1 class="h3 text-gray-900 mb-4 font-weight-bold">REGISTER ADMIN</h1>
                    <br>
                  </div>

                  <form class="user" method="post" action="admin_r.php">
                    <div class="form-group">
                      <input type="text" name="nama" placeholder="Masukan Nama" class="form-control" required="on" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" placeholder="Masukan Username" class="form-control" required="on" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" placeholder="Masukan Password" class="form-control" required="on" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="tel" name="telpon" placeholder="Masukan Telepon" class="form-control" required="on" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="submit" name="simpan"  class="form-control btn-primary" value="Daftar">
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                  <a href="index.php" class="nav-link text-primary">Kembali ke halaman login</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/admin.min.js"></script>

</body>

</html>
