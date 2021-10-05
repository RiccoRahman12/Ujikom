<?php 

	if (isset($_GET['p'])) {
		$p = $_GET['p'];

		switch ($p) {
			case 'dashboard':
				include_once "dashboard.php";
				break;
			case 'input_petugas':
				include_once "register_p.php";
				break;
			case 'verifikasi':
				include_once "verifikasi.php";
				break;
			case 'data_masyarakat':
				include_once "a_masyarakat.php";
				break;
			case 'tanggapan':
				include_once "tanggapan.php";
				break;
			case 'laporan':
				include_once "laporan.php";
				break;
			case 'petugas':
				include_once "petugas.php";
				break;
			case 'edit':
				include_once "edit_p.php";
				break;
			case 'delete':
				include_once "delete_pet.php";
				break;
			case 'del':
				include_once "del_m.php"; 
				break;
			case 'detail_p':
				include_once "detail_p.php";
				break;
			case 'delt':
				include_once "delt_p.php";
				break;
			case 'laporan_masyarakat':
				include_once "laporan_masyarakat.php";
				break;
			case 'laporan_petugas':
				include_once "laporan_petugas.php";
				break;
			case 'laporan_tanggapan':
				include_once "laporan_tanggapan.php";
				break;
			case 'laporan_pengaduan':
				include_once "laporan_pengaduan.php";
				break;
			default:
				echo 'tidak ditemukan!';
				break;
		}
	}

?>