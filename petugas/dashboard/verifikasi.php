<?php include_once "../../config/koneksi.php"; 
  
  if (isset($_POST['cari'])){
    $cari = $_POST['keyword'];
    $_SESSION['cari'] = $cari;
  }else {     
    $cari = isset($_SESSION['cari']);
  }
    


  $ambilData = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status = '0' ");

  //PAGINATION
  $batas = 5;
  $total = mysqli_num_rows($ambilData);
  $jumlahPagination = ceil($total / $batas);


  $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
  $halamanAwal = ($halaman * $batas) - $batas ;

  $previous = $halaman - 1;
  $next = $halaman + 1;

  //END PAGINATION

  if ($cari == "") {
    $dataPerhalaman = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status = '0' LIMIT $halamanAwal, $batas");
  }else{
    $dataPerhalaman = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status = '0' OR nama LIKE '%$cari%' LIMIT $halamanAwal, $batas");
  }

?>
<style>
  .inpt{
    outline-style: none;
  }

  .inpt:hover{
    background-color: black;
  }
  </style>
    <div class="card shadow">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary text-center">Data Pengaduan Masyarakat</h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="post" action="?p=data_masyarakat" class="mb-3">
                  <div class="input-group">
                    <input type="text" class="border-0 bg-light inpt" name="keyword" placeholder="cari..." autofocus>
                    <div class="input-group-append">
                      <button class="btn btn-light" type="submit" name="cari">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <?php 

                  $no = $halamanAwal + 1;

                  while ($data = mysqli_fetch_array($dataPerhalaman)){

                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['tgl_pengaduan']; ?></td>
                      <td><?php echo $data['nik']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['isi_laporan']; ?></td>
                      <td><img src="<?php echo '../../foto/'.$data['foto']; ?>" alt="gambar" width="100"></td>
                      <td><?php echo $data['status']; ?></td>
                      <td cols="2">
                          <a href="proses.php?id=<?php echo $data['id_pengaduan']; ?>" class="btn btn-info" onclick="return confirm('Proses Pengaduan ini?')">
                            <i class="fas fa-check"></i>
                            <span>Verifikasi</span>
                          </a>
                      </td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" <?php if($halaman > 1){ echo "href='?p=verifikasi&halaman=$previous'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$jumlahPagination;$x++){
                      ?> 
                      <li class="page-item"><a class="page-link" href="?p=verifikasi&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                      <?php
                    }
                    ?>        
                    <li class="page-item">
                      <a  class="page-link" <?php if($halaman < $jumlahPagination) { echo "href='?p=verifikasi&halaman=$next'"; } ?>>Next</a>
                    </li>
                  </ul>
                <div class="h5">
                  <span class="text-dark">Total : <?php echo $total; ?></span>
                </div>
              </div>
            </div>
          </div>
