<?php
require_once "config/koneksi.php";

if (isset($_POST['simpan'])) {
	
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$telpon = $_POST['telpon'];

		
		$query = mysqli_query($conn, "SELECT * FROM masyarakat WHERE nik = '$nik' or username ='$username'");
		//ngecek ada atau tidaknya data didatabase
		if ($query->num_rows > 0) {
			echo '<script>alert("username atau nik sudah terdaftar");
			window.location="register.php";
			</script>';
		}else{

		$sql = "INSERT INTO masyarakat VALUES('$nik', '$nama', '$username', '$password', '$telpon')";
		$result = mysqli_query($conn,$sql);

		if ($result) {
			echo '<script>
						alert("Register Berhasil"); window.location="login.php";
			</script>';
		}else {
			echo '<script>
						alert("Register Gagal"); window.location="register.php";
			</script>';
		}

		}
	



}


?>