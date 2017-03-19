<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$sql="delete from pasok where kode_pasok='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Hapus'); document.location='pasok.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>