<?php include_once "../../config/koneksi.php"; ?>


  <style>
    .gede {

      font-size: 100px;
    }

  </style>

</head>


  <div class="container-fluid">
  <span class="h6">Anda Masuk Sebagai : <span class="text-success"><?php echo $_SESSION['level']; ?></span></span>
    <div class="row">

<?php $query = mysqli_query($conn, "SELECT * FROm petugas"); $ambil = mysqli_num_rows($query);  ?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-3 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Petugas</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                      <span class="badge badge-danger"><?php echo $ambil; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php $query = mysqli_query($conn, "SELECT * FROm pengaduan WHERE status='proses'"); $ambil = mysqli_num_rows($query);  ?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-3 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-success text-uppercase mb-1">Pengaduan</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments  fa-2x text-gray-300"></i>
                      <span class="badge badge-danger"><?php echo $ambil; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php $query = mysqli_query($conn, "SELECT * FROm masyarakat"); $ambil = mysqli_num_rows($query);  ?>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-3 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-info text-uppercase mb-1">Akun Masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                      <span class="badge badge-danger"><?php echo $ambil; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php $query = mysqli_query($conn, "SELECT * FROm tanggapan"); $ambil = mysqli_num_rows($query);  ?>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-3 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">Tanggapan</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-reply fa-2x text-gray-300"></i>
                      <span class="badge badge-danger"><?php echo $ambil; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>

      <h3 class="text-center mt-4">~SELAMAT DATANG~</h3>