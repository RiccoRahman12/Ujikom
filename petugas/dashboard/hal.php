<?php 

	if(isset($_GET['u'])){
		$u = $_GET['u'];

		switch ($u) {
			case 'dashboard':
				include "dashboard.php";
				break;
			case 'validasi_verifikasi':
				include_once "verifikasi.php";
				break;
			default:
				// code...
				break;
		}
	}

?>