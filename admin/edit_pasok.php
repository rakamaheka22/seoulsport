<br />
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Edit Pasok</b></td></tr></table></div>
<br />
<?php
include "../config/koneksi.php";
$sql=mysql_query("select * from pasok where kode_pasok='".$_GET['id']."'");
$cek=mysql_fetch_array($sql);
?>
<form name="formedit" id="formedit" action="cekedit_exe_pasok.php?id=<?php echo $cek[0]; ?>" method="post" enctype="multipart/form-data">
<font face="Aller" size="-1">
<table style="margin-left:20px;" width="400" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>Kode Pasok</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['kode_pasok']; ?>" name="kode_pasok2" /></td>
  </tr>
  <tr>
    <td>Kode Barang</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['kode_barang']; ?>" name="kode_barang" /></td>
  </tr>
  <tr>
    <td>Kode Suplier</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['kode_suplier']; ?>" name="kode_suplier" /></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['tanggal']; ?>" name="tanggal" /></td>
  </tr>
  <tr>
    <td>Jumlah Pasok</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['jumlah_pasok']; ?>" name="jumlah_pasok" /></td>
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