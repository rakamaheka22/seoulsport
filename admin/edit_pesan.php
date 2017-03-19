<br />
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Edit Pemesan</b></td></tr></table></div>
<br />
<?php
include "../config/koneksi.php";
$sql=mysql_query("select * from customer where id='".$_GET['id']."'");
$cek=mysql_fetch_array($sql);
?>
<form name="formedit" id="formedit" action="cekedit_exe_pesan.php?id=<?php echo $cek[0]; ?>" method="post" enctype="multipart/form-data">
<font face="Aller" size="-1">
<table style="margin-left:20px;" width="400" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>Kode Customer</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['kode_customer']; ?>" name="kode_customer" /></td>
  </tr>
  <tr>
    <td>Nama Customer</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['nama_customer']; ?>" name="nama_customer" /></td>
  </tr>
  <tr>
    <td>Alamat Customer</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['alamat_customer']; ?>" name="alamat_customer" /></td>
  </tr>
  <tr>
    <td>Kota Customer</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['kota_customer']; ?>" name="kota_customer" /></td>
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