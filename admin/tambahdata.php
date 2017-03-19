<?php
include "../config/koneksi.php";
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$ukuran_barang=$_POST['ukuran_barang'];
$stok_barang=$_POST['stok_barang'];
$folder="../foto/";
$folder=$folder . basename($_FILES['foto']['name']);
$gambar=($_FILES['foto']['name']);
$harga_barang=$_POST['harga_barang'];
$deskripsi=$_POST['deskripsi'];
$sql="Insert into barang(kode_barang, nama_barang, jenis_barang, ukuran_barang, stok_barang, gambar_barang, harga_barang, deskripsi)
values
('$kode_barang','$nama_barang','$jenis_barang','$ukuran_barang', '$stok_barang','$gambar','$harga_barang','$deskripsi')";
$cek=mysql_query($sql);
if ($cek){
	if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
		echo "<script>alert('Data Berhasil di Simpan'); document.location='home.php?page=data_produk'</script>";
}else{
	echo "GAGAL". mysql_error ();
}
}
?>
