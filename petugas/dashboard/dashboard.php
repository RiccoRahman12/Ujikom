<?php include_once "../../config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Petugas</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/admin.min.css" rel="stylesheet">

  <style>

    .gede {
      font-size: 100px;
    }

  </style>

</head>

<body id="page-top">

      <div class="text-dark mb-4 ml-3">
        <span class="">Anda login sebagai : <b><?php echo $_SESSION['level']; ?></b></span>
      </div>
  <?php $data = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='0'"); $sql = mysqli_num_rows($data); ?>
            <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Laporan Pengaduan :</div>
                      <div class="h6 mb-0 text-gray-800">Ada <?php echo $sql; ?> pengaduan dari masyarakat.</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                      <span class="badge badge-danger"><?php echo $sql; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/admin.min.js"></script>

</body>
</html>
