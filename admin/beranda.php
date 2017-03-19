 <?php
 include "../config/koneksi.php";
 $query   = "SELECT * FROM admin where username='".$_SESSION['username']."'";
$hasil  = mysql_query($query);
$dat=mysql_fetch_array($hasil);
?>
<table width="95%" height="400" cellpadding="20">
<tr>
<td valign="top">
<font face="Aller">Selamat Datang, Admin <font color="#FF0000"><?php echo $dat['nama_admin']; ?></font></font>
</td>
</tr>
</table>