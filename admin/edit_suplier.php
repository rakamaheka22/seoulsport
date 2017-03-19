<br />
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Edit Suplier</b></td></tr></table></div>
<br />
<?php
include "../config/koneksi.php";
$sql=mysql_query("select * from suplier where kode_suplier='".$_GET['id']."'");
$cek=mysql_fetch_array($sql);
?>
<form name="formedit" id="formedit" action="cekedit_exe_suplier.php?id=<?php echo $cek[0]; ?>" method="post" enctype="multipart/form-data">
<font face="Aller" size="-1">
<table style="margin-left:20px;" width="400" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>Kode Suplier</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['kode_suplier']; ?>" name="kode_suplier2" /></td>
  </tr>
  <tr>
    <td>Nama Suplier</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['nama_suplier']; ?>" name="nama_suplier" /></td>
  </tr>
  <tr>
    <td>Alamat Suplier</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['alamat_suplier']; ?>" name="alamat_suplier" /></td>
  </tr>
  <tr>
    <td>Kota Suplier</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['kota_suplier']; ?>" name="kota_suplier" /></td>
  </tr>
  <tr>
    <td>No Telepon</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['no_telepon']; ?>" name="no_telepon" /></td>
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