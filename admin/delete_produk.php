<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$sql="delete from barang where kode_barang='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Hapus'); document.location='produk.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>