<?php
include_once "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Website Pengaduan Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/admin.min.css" rel="stylesheet">
  </head>

  <body>
   

  <div class="card shadow">
            <div class="card-header py-3">
            <span>Detail</span>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                <br>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Tanggapan</th>
                      <th>Tanggapan</th>
                      <th>Status Pengaduan</th>
                    </tr>
                  </thead>
                  <?php 

                  $no = 1;
                  $sql = "SELECT * FROM pengaduan JOIN tanggapan WHERE nik = '$_SESSION[nik]' ";
                  $query = mysqli_query($conn, $sql);
                  while ($data = mysqli_fetch_array($query)) {
				  ?>
                  <tbody>
                    <tr>
                     <td><?php echo $no++;?></td>
                      <td><?php echo $data['tgl_tanggapan'];?></td>
                      <td><?php echo $data['tanggapan'];?></td>
                      <td><?php echo $data['status']; ?></td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
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