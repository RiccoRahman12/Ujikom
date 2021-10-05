<?php 
    include_once "../../config/koneksi.php";
?>

    <button class="btn btn-primary mb-3" type="button" onclick="frames['frame'].print()">
    <i class="fas fa-print"></i>
    Cetak
    </button>
    
    <iframe src="cetak_masyarakat.php" frameborder="0" width="100%" name="frame" height="1050"></iframe>