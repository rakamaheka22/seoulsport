<table width="95%">
<tr>
<br />
<div class="pelindung">
   <div id="judul" align="center" style="padding-top:12px;">
   
   </div>
  </div>
<br />
<Br />
<br />
</tr>
<tr>
<td width="300px" height="300px" align="center">
<?php
include "config/koneksi.php";
$query_ambil_produk	= mysql_query("SELECT * FROM barang WHERE jenis_barang='JAKET' ORDER BY kode_barang DESC LIMIT 0,3"); //query ambil data berita.
while ($data_produk = mysql_fetch_array($query_ambil_produk)) {
//perulangan untuk menampilkan berita 
?>

<font face="neo Sans"><h4 style="margin-bottom: 0px"><?php echo $data_produk['nama_barang']; ?></h4>
<small>Kategori : <?php echo $data_produk['jenis_barang']; ?></small>
<br />
<?php 
if (is_file("foto/".$data_produk['gambar_barang']) == TRUE) {
?>
<center><img align="middle" src="foto/<?php echo $data_produk['gambar_barang']; ?>" style="width: 180px; height: 200px; margin: 0 10px 10px 0; display: inline;"></center>
<?php 
} else {
	?>
	<center><img align="middle" src="images/noimage.jpg" style="width: 180px; height: 200px; margin: 0 10px 10px 0; display: inline;"></center>
<?php }
?>
<?php echo "Rp.".substr($data_produk['harga_barang'], 0, 3).".".substr($data_produk['harga_barang'], 3, 3).",00"; ?> <br />
<a href="detail_barang.php?id=<?php echo $data_produk['kode_barang']; ?>"><img src="images/beli.gif" /></a>

<br />

<hr style="border: dashed 1px #adadad"></font>
</td>
<td width="300px" height="300px" align="center">
<?php
}
//penutup perulangan while
?></td></tr></table>
<table>
<tr>
<td width="300px" height="300px" align="center">
<?php
include "config/koneksi.php";
$query_ambil_produk	= mysql_query("SELECT * FROM barang WHERE jenis_barang='JAKET' ORDER BY kode_barang DESC LIMIT 3,3"); //query ambil data berita.
while ($data_produk = mysql_fetch_array($query_ambil_produk)) {
//perulangan untuk menampilkan berita 
?>

<font face="neo Sans"><h4 style="margin-bottom: 0px"><?php echo $data_produk['nama_barang']; ?></h4>
<small>Kategori : <?php echo $data_produk['jenis_barang']; ?></small>
<br />
<?php 
if (is_file("foto/".$data_produk['gambar_barang']) == TRUE) {
?>
<center><img align="middle" src="foto/<?php echo $data_produk['gambar_barang']; ?>" style="width: 180px; height: 200px; margin: 0 10px 10px 0; display: inline;"></center>
<?php 
} else {
	?>
	<center><img align="middle" src="images/noimage.jpg" style="width: 180px; height: 200px; margin: 0 10px 10px 0; display: inline;"></center>
<?php }
?>
<?php echo "Rp.".substr($data_produk['harga_barang'], 0, 3).".".substr($data_produk['harga_barang'], 3, 3).",00"; ?> 
<br />
<a href="detail_barang.php?id=<?php echo $data_produk['kode_barang']; ?>"><img src="images/beli.gif" /></a>

<br />

<hr style="border: dashed 1px #adadad"></font>
</td>
<td width="300px" height="300px" align="center">
<?php
}
//penutup perulangan while
?></td></tr></table>
<table>
<tr>
<td width="300px" height="300px" align="center">
<?php
include "config/koneksi.php";
$query_ambil_produk	= mysql_query("SELECT * FROM barang WHERE jenis_barang='JAKET' ORDER BY kode_barang DESC LIMIT 6,3"); //query ambil data berita.
while ($data_produk = mysql_fetch_array($query_ambil_produk)) {
//perulangan untuk menampilkan berita 
?>

<font face="neo Sans"><h4 style="margin-bottom: 0px"><?php echo $data_produk['nama_barang']; ?></h4>
<small>Kategori : <?php echo $data_produk['jenis_barang']; ?></small>
<br />
<?php 
if (is_file("foto/".$data_produk['gambar_barang']) == TRUE) {
?>
<center><img align="middle" src="foto/<?php echo $data_produk['gambar_barang']; ?>" style="width: 180px; height: 200px; margin: 0 10px 10px 0; display: inline;"></center>
<?php 
} else {
	?>
	<center><img align="middle" src="images/noimage.jpg" style="width: 180px; height: 200px; margin: 0 10px 10px 0; display: inline;"></center>
<?php }
?>
<?php echo "Rp.".substr($data_produk['harga_barang'], 0, 3).".".substr($data_produk['harga_barang'], 3, 3).",00"; ?> 
<br />
<a href="detail_barang.php?id=<?php echo $data_produk['kode_barang']; ?>"><img src="images/beli.gif" /></a>

<br />

</font>
</td>
<td width="300px" height="300px" align="center">
<?php
}
//penutup perulangan while
?></td></tr></table>
<br>
<br>