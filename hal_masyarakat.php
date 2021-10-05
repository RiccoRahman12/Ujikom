<?php 

 if (isset($_GET['p'])) {
    
     $url = $_GET['p'];

      switch ($url) {
         case 'tulis':
             include ("write_p.php");
         break;
		 case 'view':
             include ("view_pengaduan.php");
         break;

         case 'dashboard':
             include ('dashboard.php');
         break;

         default:
             echo 'tidak ditemukan!';
         break;
                        }

            }
?>