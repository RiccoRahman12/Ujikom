<?php 

require_once "config/koneksi.php";

if (isset($_POST['submit'])) {
	
	$tgl = date('Y/m/d');
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$isi = $_POST['isi_laporan'];
	$foto = $_FILES['foto']['name'];
	$status = 0;

	$ekstensi_dibolehkan = array('png', 'jpg', 'gif');
	$ex = explode('.', $foto);
	$ekstensi = strtolower(end($ex));
	$ukuran = $_FILES['foto']['size'];
	$file_tmp = $_FILES['foto']['tmp_name'];

	if (in_array($ekstensi, $ekstensi_dibolehkan) === true){
		if ($ukuran < 299999){
			move_uploaded_file($file_tmp, 'foto/'.$foto);
			$sql= "INSERT INTO pengaduan VALUES('', '$tgl', '$nik', '$nama', '$isi', '$foto', '$status')";
			$query = mysqli_query($conn, $sql);
			if($query){
				echo "<script>alert('Pengaduan Berhasil Dibuat!');
				alert('Mohon tunggu tanggapan dari admin');
						window.location='masyarakat.php?p=dashboard';
				</script>";
				
			}else{
				echo "<script>alert('Pengaduan Gagal Dibuat!');
				window.location='masyarakat.php?p=tulis';
				</script>";
			}
		}else{
			echo "<script>alert('ukuran terlalu besar');
			window.location='masyarakat.php?p=tulis';
			</script>";
		}
	}else{
		echo "<script>alert('Ekstensi file tidak diperbolehkan!');
		window.location='masyarakat.php?p=tulis';
		</script>";
	}
}

?>