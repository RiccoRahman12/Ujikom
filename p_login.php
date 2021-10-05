<?php 

session_start();

require_once "config/koneksi.php";

if(isset($_POST['login'])) {

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$data = "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'";
	$q = mysqli_query($conn,$data);

	$cek = mysqli_num_rows($q);

	if ($cek > 0) {
		$d = mysqli_fetch_array($q);
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['nik'] = $d['nik'];
		$_SESSION['status'] = 'login';
		header("location:masyarakat.php?p=dashboard");
	}else {
		header("location:login.php?p=gagal");
	}
}


?>