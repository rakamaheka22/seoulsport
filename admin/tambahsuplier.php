<?php
include "../config/koneksi.php";
$kode_suplier=$_POST['kode_suplier'];
$nama_suplier=$_POST['nama_suplier'];
$alamat_suplier=$_POST['alamat_suplier'];
$kota_suplier=$_POST['kota_suplier'];
$no_telepon=$_POST['no_telepon'];
$sql="Insert into suplier(kode_suplier, nama_suplier, alamat_suplier, kota_suplier, no_telepon)
values
('$kode_suplier','$nama_suplier','$alamat_suplier','$kota_suplier', '$no_telepon')";
$cek=mysql_query($sql);
if ($cek){
		echo "<script>alert('Data Berhasil di Simpan'); document.location='home.php?page=input_suplier'</script>";
}else{
	echo "GAGAL". mysql_error ();
}
?>