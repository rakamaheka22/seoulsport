<br />
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Edit Transaksi</b></td></tr></table></div>
<br />
<?php
include "../config/koneksi.php";
$sql=mysql_query("select * from pembelian where id='".$_GET['id']."'");
$cek=mysql_fetch_array($sql);
?>
<form name="formedit" id="formedit" action="cekedit_exe_trans.php?id=<?php echo $cek[0]; ?>" method="post" enctype="multipart/form-data">
<font face="Aller" size="-1">
<table style="margin-left:20px;" width="400" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>Kode Beli</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['kode_beli']; ?>" name="kode_beli" /></td>
  </tr>
  <tr>
    <td>Kode Barang</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['kode_barang']; ?>" name="kode_barang" /></td>
  </tr>
  <tr>
    <td>Kode Customer</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['kode_customer']; ?>" name="kode_customer" /></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td>:</td>
    <td><input type="text"  value="<?php echo $cek['tanggal']; ?>" name="tanggal" /></td>
  </tr>
  <tr>
    <td>Jumlah_Beli</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['jumlah_beli']; ?>" name="jumlah_beli" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td>:</td>
    <td><input type="text" value="<?php echo $cek['status']; ?>" name="status" /></td>
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