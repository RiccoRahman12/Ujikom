<?php 
include_once "../../config/koneksi.php";

if (isset($_POST['simpan'])){

  $id_pengaduan = $_POST['id_pengaduan'];
  $tgl = $_POST['tgl_tanggapan'];
  $tanggapan = $_POST['tanggapan'];
  $id_pet = $_POST['id_petugas'];
  $st = "selesai";

  $sql = "INSERT INTO tanggapan VALUES ('', '$id_pengaduan', '$tgl', '$tanggapan', '$id_pet')";
  $query = mysqli_query($conn, $sql);

  $sql2 = "UPDATE pengaduan SET status = '$st' WHERE id_pengaduan = '$id_pengaduan'";
  $query2 = mysqli_query($conn, $sql2);

  if($query) {
    echo "<script>alert('Berhasil');
          window.location='?p=verifikasi';
    </script>";
   }else{

    echo "<script>alert('Gagal');
          window.location='?p=tanggapan';
    </script>";
   }
}

?>

  <div class="card shadow">
    <div class="card-header">
      <span class="h4 text-info">Detail</span>
    </div>
    <div class="card-body">
      <a href="?p=verifikasi" class="btn btn-primary mb-3">
                  <i class="fas fa-arrwo-left"></i>
                  <span class="text-white">Kembali</span>
                </a>

      <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
          <span>ID Pengaduan</span>
          <input type="text" name="id_pengaduan" value="<?php echo $_GET['id']; ?>" class='form-control' readonly>
        </div>
        <div class="form-group">
          <span>Tanggal Tanggapan</span>
          <input type="text" name="tgl_tanggapan" value="<?php echo date('Y/m/d'); ?>" class='form-control' readonly>
        </div>
        <div class="form-group">
          <span>Tanggapan</span>
          <textarea name="tanggapan" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
          <span>ID Petugas</span>
          <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
        </div>
        <input type="submit" name="simpan" class="form-control btn-success" value="Tanggapi!">
      </form>
    </div>
  </div>
