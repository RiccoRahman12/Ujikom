<?php include_once "../../config/koneksi.php"; 
  
  if (isset($_POST['cari'])){
    $cari = $_POST['keyword'];
    $_SESSION['cari'] = $cari;
    
  }else {     

    $cari = isset($_SESSION['cari']);
  }
    


  $ambilData = mysqli_query($conn, "SELECT * FROM petugas");

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
  $dataPerhalaman = mysqli_query($conn, "SELECT * FROM petugas LIMIT $halamanAwal, $batas ");
  }else{
  $dataPerhalaman = mysqli_query($conn, "SELECT * FROM petugas WHERE nama_petugas LIKE '%$cari%' OR username LIKE '%$cari%' LIMIT $halamanAwal, $batas ");
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
              <h6 class="m-0 h3 font-weight-bold text-primary text-center">Daftar Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <a href="?p=input_petugas" class="btn btn-primary mb-4">
                  <i class="fas fa-plus"></i>
                  <span class="text-white">Tambah Petugas</span>
                </a>
                <form method="post" action="?p=petugas" class="mb-3">
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
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th class="text-center">Option</th>
                    </tr>
                  </thead>
                  <?php 

                  $no = $halamanAwal + 1;
                  while ($data = mysqli_fetch_assoc($dataPerhalaman)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['nama_petugas']; ?></td>
                      <td><?php echo $data['username']; ?></td>
                      <td><?php echo $data['password']; ?></td>
                      <td><?php echo $data['telp_petugas']; ?></td>
                      <td><?php echo $data['level']; ?></td>
                      <td class="text-center">
                        <a href="?p=edit&id=<?php echo $data['id_petugas']; ?>" class="btn mr-2 btn-circle btn-primary">
                          <i class="fas fa-edit text-white"></i>
                        </a>
                        <a href="?p=delete&id=<?php echo $data['id_petugas']; ?>" class="btn ml-1 btn-danger btn-circle" onclick="return confirm('Yakin ingin hapus?')">
                          <i class="fas fa-trash text-white"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" <?php if($halaman > 1){ echo "href='?p=petugas&halaman=$previous'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$jumlahPagination;$x++){
                      ?> 
                      <li class="page-item"><a class="page-link" href="?p=petugas&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                      <?php
                    }
                    ?>        
                    <li class="page-item">
                      <a  class="page-link" <?php if($halaman < $jumlahPagination) { echo "href='?p=petugas&halaman=$next'"; } ?>>Next</a>
                    </li>
                  </ul>
                <div class="h5">
                  <span class="text-dark">Total : <?php echo $total; ?></span>
                </div>
              </div>
            </div>
          </div>
   