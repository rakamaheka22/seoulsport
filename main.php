<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main"; switch ($page){
	 case 'tampil_jersey' : include "tampil_jersey.php"; break;
	 case 'tampil_celana' : include "tampil_celana.php"; break;
	  case 'tampil_bola' : include "tampil_bola.php"; break;
	  case 'tampil_sepatu' : include "tampil_sepatu.php"; break;
	 case 'tampil_kaos_kaki' : include "tampil_kaos_kaki.php"; break;
	  case 'tampil_tas' : include "tampil_tas.php"; break;
	  case 'tampil_jaket' : include "tampil_jaket.php"; break;
}
?>