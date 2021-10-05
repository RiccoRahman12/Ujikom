<?php 
include_once "../../config/koneksi.php";

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $telpon = $_POST['telpon'];
  $level = "petugas";

  $sql = "INSERT INTO petugas VALUES ('', '$nama', '$username', '$password', '$telpon', '$level')";
  $query = mysqli_query($conn, $sql);

  if($query) {
    echo "<script>
      alert('Berhasil Ditambahkan!');
      window.location = '?p=petugas';
    </script>";
  }else{

    echo "<script>
      alert('Gagal Ditambahkan!');
      window.location = '?p=input_petugas';
    </script>";
  }

}

?>


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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/admin.min.css" rel="stylesheet">

</head>

<body>

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
                    <h1 class="h3 text-gray-900">REGISTER PETUGAS</h1>
                    <br>
                  </div>
                  <form class="user" method="post">
                    <div class="input-group mb-3">
                      <input type="text" name="nama" placeholder="Masukan Nama" class="form-control" required= autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                      <input type="text" name="username" placeholder="Masukan Username" class="form-control" required autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                      <input type="password" name="password" placeholder="Masukan Password" id="pass" class="form-control" required autocomplete="off">
                      <div class="input-group-append">
                        <span id="buttonPass" onclick="change()" class="input-group-text">
                          <i class="fas fa-eye"></i>
                        </span>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="tel" name="telpon" placeholder="Masukan Telepon" class="form-control" required="on" autocomplete="off">
                    </div>
                    <div class="input-group mb-3">
                      <input type="submit" name="simpan"  class="form-control btn-primary" value="Simpan">
                    </div>
                    <a href="?p=petugas" class="nav-link"> <--Kembali</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <script type="text/javascript">
         function change()
         {
            var x = document.getElementById('pass').type;
 
            if (x == 'password')
            {
               document.getElementById('pass').type = 'text';
               document.getElementById('buttonPass').innerHTML = '<i class="fas fa-eye-slash"></i>';
            }
            else
            {
               document.getElementById('pass').type = 'password';
               document.getElementById('buttonPass').innerHTML = '<i class="fas fa-eye"></i>';
            }
         }
      </script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/admin.min.js"></script>

</body>

</html>