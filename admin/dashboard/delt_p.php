<?php 

include_once "../../config/koneksi.php";

$sql = "DELETE FROM pengaduan WHERE id_pengaduan='{$_GET['id']}'";
$query = mysqli_query($conn, $sql);

if ($query) {
	echo '<script>
			alert("Berhasil Hapus");
			window.location = "?p=verifikasi";
	</script>';
}else{

	echo '<script>
			alert("Gagal Hapus");
			window.location = "?p=verifikasi";
	</script>';
}

?>