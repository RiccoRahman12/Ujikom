<?php 
include_once "../../config/koneksi.php";
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
      <a href="?p=delt&id=<?php echo $_GET['id']; ?>" class="btn btn-danger mb-3 ml-2">
                  <i class="fas fa-trash"></i>
                  <span class="text-white">Hapus</span>
                </a>
        <?php 
        $sql = "SELECT * FROM pengaduan WHERE id_pengaduan='{$_GET['id']}'";
        $query = mysqli_query($conn, $sql);

        $d = mysqli_fetch_array($query);
        ?>
      <form method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
          <span>Tanggal Pengaduan</span>
          <input type="text" name="tgl_pengaduan" value="<?php echo $d['tgl_pengaduan'] ?>" class='form-control' readonly>
        </div>
        <div class="form-group">
          <span>NIK</span>
          <input type="text" name="nik" value="<?php echo $d['nik']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <span>Nama</span>
          <input type="text" name="nama" value="<?php echo $d['nama']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group">
          <span>Isi Laporan</span>
          <textarea name="isi_laporan" class="form-control" rows="5" readonly><?php echo $d['isi_laporan']; ?></textarea>
        </div>
        <div class="form-group">
          <span>Foto</span>
          <br>
          <img src="<?php echo '../../foto/'.$d['foto']; ?>" alt="" width="400" class="figure-img img-thumbnail">
        </div>
      </form>
    </div>
  </div>