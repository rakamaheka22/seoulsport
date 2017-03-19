<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main"; switch ($page){
	 case 'beranda' : include "beranda.php"; break;
	  case 'data_produk' : include "data_produk.php"; break;
	  case 'data_pemesan' : include "data_pemesan.php"; break;
	  case 'data_pasok' : include "data_pasok.php"; break;
	  case 'input_produk' : include "input_produk.php"; break;
	  case 'input_suplier' : include "input_suplier.php"; break;
	  case 'input_pasok' : include "input_pasok.php"; break;
	  case 'transaksi' : include "transaksi.php"; break;
	  case 'voting' : include "voting.php"; break;
}
?>