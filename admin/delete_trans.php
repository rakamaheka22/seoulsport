<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$sql="delete from pembelian where id='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Hapus'); document.location='transaksi.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>