<?php include_once "../../config/koneksi.php"; 
  
  if (isset($_POST['cari'])){
    $cari = $_POST['keyword'];
    $_SESSION['cari'] = $cari;
  }else {     
    $cari = isset($_SESSION['cari']);
  }
    


  $ambilData = mysqli_query($conn, "SELECT * FROM masyarakat");

  //PAGINATION
  $batas = 5;
  $total = mysqli_num_rows($ambilData);
  $jumlahPagination = ceil($total / $batas);


  $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
  $halamanAwal = ($halaman * $batas) - $batas ;

  $previous = $halaman - 1;
  $next = $halaman + 1;

  //END PAGINATION

  if($cari == ""){
  $dataPerhalaman = mysqli_query($conn, "SELECT * FROM masyarakat LIMIT $halamanAwal, $batas ");
  }else{
  $dataPerhalaman = mysqli_query($conn, "SELECT * FROM masyarakat WHERE nama LIKE '%$cari%' OR username LIKE '%$cari%' OR nik LIKE '%$cari%' LIMIT $halamanAwal, $batas ");
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
              <h6 class="m-0 h3 font-weight-bold text-primary text-center">Data Masyarakat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <form method="post" action="?p=data_masyarakat">
                  <div class="input-group">
                    <input type="text" class="border-0 bg-light inpt" name="keyword" placeholder="cari..." autofocus>
                    <div class="input-group-append">
                      <button class="btn btn-light" type="submit" name="cari">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
                <br>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIK</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telepon</th>
                      <th class="text-center">Option</th>
                    </tr>
                  </thead>
                  <?php 

                  $no = $halamanAwal + 1;
                  while ($data = mysqli_fetch_array($dataPerhalaman)){

                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['nik']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['telp']; ?></td>
                      <td class="text-center">
                        <a href="?p=del&id=<?php echo $data['nik']; ?>" class="btn ml-1 btn-danger btn-circle" onclick="return confirm('Yakin ingin hapus?')">
                          <i class="fas fa-trash text-white"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" <?php if($halaman > 1){ echo "href='?p=data_masyarakat&halaman=$previous'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$jumlahPagination;$x++){
                      ?> 
                      <li class="page-item"><a class="page-link" href="?p=data_masyarakat&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                      <?php
                    }
                    ?>        
                    <li class="page-item">
                      <a  class="page-link" <?php if($halaman < $jumlahPagination) { echo "href='?p=data_masyarakat&halaman=$next'"; } ?>>Next</a>
                    </li>
                  </ul>
                <div class="h5">
                  <span class="text-dark">Total : <?php echo $total; ?></span>
                </div>
              </div>
            </div>
          </div>
