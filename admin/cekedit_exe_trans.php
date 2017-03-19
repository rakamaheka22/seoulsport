<?php
include "../config/koneksi.php";
$kode_beli=$_POST['kode_beli'];
$kode_barang=$_POST['kode_barang'];
$kode_customer=$_POST['kode_customer'];
$tanggal=$_POST['tanggal'];
$jumlah_beli=$_POST['jumlah_beli'];
$status=$_POST['status'];
$id=$_GET['id'];

$sql="update pembelian set kode_beli='$kode_beli', kode_barang='$kode_barang', kode_customer='$kode_customer', tanggal='$tanggal', jumlah_beli='$jumlah_beli', status='$status' where id='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Edit'); document.location='pemesan.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>