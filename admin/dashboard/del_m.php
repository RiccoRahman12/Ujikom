<?php 
include_once "../../config/koneksi.php";

$sql = "DELETE FROM masyarakat WHERE nik='{$_GET['id']}'";
$query = mysqli_query($conn, $sql);

if ($query) {
	echo "<script>
      alert('Berhasil Hapus!!');
      window.location = '?p=akun_masyarakat';
    </script>";
}else{
	echo "<script>
      alert('Gagal Hapus!');
      window.location = '?p=akun_masyarakat';
    </script>";
}

?>