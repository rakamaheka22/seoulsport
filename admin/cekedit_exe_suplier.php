<?php
include "../config/koneksi.php";
$nama_suplier=$_POST['nama_suplier'];
$alamat_suplier=$_POST['alamat_suplier'];
$kota_suplier=$_POST['kota_suplier'];
$no_telepon=$_POST['no_telepon'];
$id=$_GET['id'];

$sql="update suplier set nama_suplier='$nama_suplier', alamat_suplier='$alamat_suplier', kota_suplier='$kota_suplier', no_telepon='$no_telepon' where kode_suplier='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Edit'); document.location='suplier.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>