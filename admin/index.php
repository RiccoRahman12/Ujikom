<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Login</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/admin.min.css" rel="stylesheet">

  <style type="text/css">
    .back{
      background: #CCCC;
    }
  </style>

</head>

<body class="back">

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
                    <h1 class="h3 text-gray-900 mb-4">LOGIN</h1>
                    <br>
                  </div>
                  <?php 
                  if(isset($_GET['p'])){
                          if ($_GET['p'] == "no_admin") {
                            echo "<script>alert('Anda Bukan Petugas!!')</script>";
                          }
                          if($_GET['p'] == "gagal"){
                          echo "<script>alert('Username atau Password Salah!')</script>";
                          }
                          if($_GET['p'] == "belum_login"){
                          echo "<script>alert('Anda Bukan Admin!')</script>";
                          }
                          if($_GET['p'] == "logout"){
                           echo "<script>alert('Logout Berhasil!')</script>";
                          }
                        } 
                    ?>
                  <form class="user" method="post" action="proses.php">
                    <div class="form-group">
                      <input type="text" class="form-control text-dark" name="username" placeholder="Username" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control text-dark" name="password"  placeholder="Password" required autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Level</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="level">
                            <option selected>Choose...</option>
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
                        </select>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary form-control" value="LOGIN">
                    <hr>
                  <div class="text-center">
                    <h4 class="h6 text-dark">Daftar sebagai admin? <a href="register.php" class="btn-link">daftar</a> disini.</h4>
                    <hr>
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
