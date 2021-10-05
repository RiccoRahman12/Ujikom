<?php 
include_once "../../config/koneksi.php";

 if (isset($_POST['simpan'])) {
   $nama = $_POST['nama'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $telpon = $_POST['telpon'];

   $sql = "UPDATE petugas SET nama_petugas= '$nama', username = '$username', password = '$password', telp_petugas = '$telpon' WHERE id_petugas = '{$_GET['id']}'";
   $query = mysqli_query($conn, $sql);

   if($query) {
    echo "<script>alert('Berhasil Edit');
          window.location='?p=petugas';
    </script>";
   }else{

    echo "<script>alert('Gagal Edit');
          window.location='?p=petugas';
    </script>";
   }
 }


?>

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
                    <h1 class="h3 text-gray-900">PETUGAS</h1>
                    <br>
                  </div>

                  <?php 
                  $sql = "SELECT * FROM petugas WHERE id_petugas = '{$_GET['id']}' ";
                  $query = mysqli_query($conn, $sql);

                  $d = mysqli_fetch_array($query);
                  ?>
                  <form class="user" method="post">
                    <div class="form-group">
                      <span class="font-weight-bold">Nama</span>
                      <input type="text" name="nama" class="form-control" value="<?php echo $d['nama_petugas']; ?>" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <span class="font-weight-bold">Username</span>
                      <input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>" required autocomplete="off">
                    </div>
                    <div class="form-group">
                      <span class="font-weight-bold">Password</span>
                      <input type="password" name="password" class="form-control" value="<?php echo $d['password']; ?>" required autocomplete="off" id="pass">
                    </div>
                    <div class="form-group">
                      <span class="font-weight-bold">Telepon</span>
                      <input type="tel" name="telpon" class="form-control" value="<?php echo $d['telp_petugas']; ?>" required autocomplete="off">
                    </div>
                    <div class="form-group">
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