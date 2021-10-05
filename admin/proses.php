<?php 

session_start();

require_once "../config/koneksi.php";

if(isset($_POST['login'])) {

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$level = mysqli_real_escape_string($conn, $_POST['level']);

	$data = "SELECT * FROM petugas WHERE username= '$username' AND password= '$password' AND level= '$level'";
	$q = mysqli_query($conn, $data);

	$cek = mysqli_num_rows($q);

	if ($cek > 0) {
		$d = mysqli_fetch_array($q);
		if ($d['level'] == "admin") {
			session_start();
			$_SESSION['id_petugas'] = $d['id_petugas'];
			$_SESSION['username']=$username;
			$_SESSION['nama']=$d['nama_petugas'];
			$_SESSION['level']=$d['level'];

			header('location:dashboard/?p=dashboard');
		}elseif ($d['level'] == "petugas") {
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['nama']=$d['nama_petugas'];
			$_SESSION['level']=$d['level'];

			header('location:../petugas/dashboard/?u=dashboard');
		}
		
	}else {
		header("location:index.php?p=gagal");
	}
}


?>