<?php 

include_once "../../config/koneksi.php";

$sql = "DELETE FROM petugas WHERE id_petugas='{$_GET['id']}'";
$query = mysqli_query($conn, $sql);

if ($query) {
	echo '<script>
			alert("Berhasil Hapus");
			window.location = "?p=petugas";
	</script>';
}else{

	echo '<script>
			alert("Gagal Hapus");
			window.location = "?p=petugas";
	</script>';
}

?>