<?php
include "../config/koneksi.php";
$kode_customer=$_POST['kode_customer'];
$nama_customer=$_POST['nama_customer'];
$alamat_customer=$_POST['alamat_customer'];
$kota_customer=$_POST['kota_customer'];
$no_telepon=$_POST['no_telepon'];
$id=$_GET['id'];

$sql="update customer set kode_customer='$kode_customer', nama_customer='$nama_customer', alamat_customer='$alamat_customer', kota_customer='$kota_customer', no_telepon='$no_telepon' where id='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Edit'); document.location='pemesan.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>