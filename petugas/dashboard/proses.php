<?php 

include_once "../../config/koneksi.php";

	$sql = "UPDATE pengaduan SET status='proses' WHERE id_pengaduan='$_GET[id]'";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "<script>alert('Verifikasi Berhasil');
					window.location='index.php?u=validasi_verifikasi';
		</script>";
	}else {
		echo "<script>alert('Verifikasi Gagal');
					window.location='index.php?u=validasi_verifikasi';
		</script>";
	}
?>