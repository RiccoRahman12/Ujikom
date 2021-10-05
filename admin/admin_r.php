<?php 
include_once "../config/koneksi.php";

if (isset($_POST['simpan'])) {
	
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$telpon = $_POST['telpon'];
	$level = "admin";

	$sql = "INSERT INTO petugas VALUES('', '$nama', '$username', '$password', '$telpon', '$level')";
	$query = mysqli_query($conn, $sql);

	if($query){
		echo "<script>alert('Berhasil Daftar');
		window.location='index.php';
		</script>";
	}else{

		echo "<script>alert('Berhasil Gagal');
		window.location='register.php';
		</script>";
	}
}

?>
