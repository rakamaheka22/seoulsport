<?php
include "../config/koneksi.php";
$kode_pasok=$_POST['kode_pasok'];
$kode_barang=$_POST['kode_barang'];
$kode_suplier=$_POST['kode_suplier'];
$tanggal=$_POST['tanggal']."-".$_POST['bulan']."-".$_POST['tahun'];
$jumlah_pasok=$_POST['jumlah_pasok'];
$sql="Insert into pasok(kode_pasok, kode_barang, kode_suplier, tanggal, jumlah_pasok)
values
('$kode_pasok','$kode_barang','$kode_suplier','$tanggal', '$jumlah_pasok')";
$cek=mysql_query($sql);
if ($cek){
		echo "<script>alert('Data Berhasil di Simpan'); document.location='home.php?page=input_pasok'</script>";
}else{
	echo "GAGAL". mysql_error ();
}
?>