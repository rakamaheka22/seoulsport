<?php
include "../config/koneksi.php";
$nama_barang=$_POST['nama_barang'];
$jenis_barang=$_POST['jenis_barang'];
$ukuran_barang=$_POST['ukuran_barang'];
$stok_barang=$_POST['stok_barang'];
$gambar_barang=($_FILES['foto']['name']);
if (strlen($gambar_barang)>0){
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'], "../foto/".$gambar_barang);
	}}
$id=$_GET['id'];
$deskrpisi=$_POST['deskripsi'];
$sql="update barang set nama_barang='$nama_barang', jenis_barang='$jenis_barang', ukuran_barang='$ukuran_barang', stok_barang='$stok_barang', gambar_barang='$gambar_barang', deskripsi='$deskripsi' where kode_barang='$id' ";
$query=mysql_query($sql);
if ($query){
	echo "<script>alert('Data Berhasil di Edit'); document.location='produk.php'</script>";
}else{
	die ("Query Error:". mysql_error());
}
?>