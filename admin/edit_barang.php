<br />
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Edit Produk</b></td></tr></table></div>
<br />
<?php
include "../config/koneksi.php";
$sql=mysql_query("select * from barang where kode_barang='".$_GET['id']."'");
$cek=mysql_fetch_array($sql);
?>
<form name="formedit" id="formedit" action="cekedit_exe.php?id=<?php echo $cek[0]; ?>" method="post" enctype="multipart/form-data">
<font face="Aller" size="-1">
<table style="margin-left:20px;" width="400" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>Nama Barang</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['nama_barang']; ?>" name="nama_barang" /></td>
  </tr>
  <tr>
    <td>Jenis Barang</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['jenis_barang']; ?>" name="jenis_barang" /></td>
  </tr>
  <tr>
    <td>Ukuran Barang</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['ukuran_barang']; ?>" name="ukuran_barang" /></td>
  </tr>
  <tr>
    <td>Stok Barang</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['stok_barang']; ?>" name="stok_barang" /></td>
  </tr>
   <script>
  function pilih_foto () {
	  var myform = document.formedit;
	  if (myform.ubahfoto.checked){
		  myform.foto.disabled = false;
	  }else{
		  myform.foto.disabled = true;
	  }}
  </script>
  <tr>
    <td>Gambar Barang</td>
    <td>:</td>
    <td><img src="../foto/<?php echo $cek['gambar_barang'] ?>" width="100px" height="100px" /><br />
    <input type='file' name='foto' disabled="disabled"><br />
    <input type="checkbox" name="ubahfoto" value="ubahfoto" onchange="return pilih_foto ()" /> <font face="aller">Ubah Foto</font></td>
  </tr>
  <tr>
    <td>Harga Barang</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['harga_barang']; ?>" name="harga_barang" /></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td>:</td>
    <td><textarea name="deskripsi"><?php echo $cek['deskripsi']; ?></textarea></td>
  </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" /></td>
  </tr>
</table>
</font>
</form>
<br />