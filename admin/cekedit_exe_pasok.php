<?php
include "../config/koneksi.php";
$kode_barang=$_POST['kode_barang'];
$kode_suplier=$_POST['kode_suplier'];
$tanggal=$_POST['tanggal'];
$jumlah_pasok=$_POST['jumlah_pasok'];
$id=$_GET['id'];

$sql="update pasok set kode_barang='$kode_barang', kode_suplier='$kode_suplier', tanggal='$tanggal', jumlah_pasok='$jumlah_pasok' where kode_pasok='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Edit'); document.location='pasok.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>