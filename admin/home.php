<?php
session_start ();
if(!isset($_SESSION['username'])){
	die("Anda Belum Login");
}
if($_SESSION['status']!="admin"){
	echo"Anda Bukan Admin";
}else{
	echo "";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adminpanel Seoul Sport</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<script>
function warning () {
	if (confirm('Apakah Anda yakin ingin Menghapus Data Ini?')) {
		return true;
	}else{
		return false;
	}}
	</script>
</head>

<body>
 <div id="header" align="center">
  <div id="header-dalam">
  <ul>
  <li><img src="../images/logobawah.png" width="25" height="30" /></li>
  </ul>
  <table border="0" align="right" style="margin-right:30px; margin-top:3px;">
  <tr>
    <td><a href="logout.php"><input type="button" value="Logout" id="button3"/></a></td>
  </tr>
  </table>
  <table border="0" align="left" >
  <tr>
    <td valign="top"><font face="Calibri Light" color="#FFFFFF" size="+2">Adminpanel Seoul Sport</font>  </td>
  </tr>
  </table>
  </div>
 </div>
 <div id="konten">
 <br />
 <center>
 <table>
 <tr>
 <td>
 <img style="border-radius:50%;" src="../images/raka.jpg" width="80" height="80" />
 </td>
 <td>
 <?php
 include "../config/koneksi.php";
 $query   = "SELECT * FROM admin where username='".$_SESSION['username']."'";
$hasil  = mysql_query($query);
$dat=mysql_fetch_array($hasil);
?>
 <label><font face="Arial, Helvetica, sans-serif" size="2" color="#FFFFFF"><?php echo $dat['nama_admin']; ?></font></label>
 <br />
 <label><font face="Georgia, Times New Roman, Times, serif" size="1" color="#FFFFFF"><i><?php echo $dat['hak_akses']; ?></i></font></label>
 </td>
 </tr>
 </table>
 <br />
 </center>
 <ul>
 <li><a href="home.php?page=beranda">Home<span style="float:right;"><img src="../images/icon/home.PNG" width="20" height="20" /></span></a></li>
 <li><a href="">Data<span style="float:right;"><img src="../images/icon/stat.png" width="20" height="20" /></span></a></li>
 <li class="sub"><a href="produk.php">&bull; Data Produk</a></li>
 <li class="sub"><a href="pemesan.php">&bull; Data Pemesan</a></li>
 <li class="sub"><a href="pasok.php">&bull; Data Pasok</a></li>
 <li class="sub"><a href="suplier.php">&bull; Data Suplier</a>
 <li><a href="">Input<span style="float:right;"><img src="../images/icon/file.PNG" width="20" height="20" /></span></a></li>
 <li class="sub"><a href="home.php?page=input_produk">&bull; Input Produk</a></li>
 <li class="sub"><a href="home.php?page=input_suplier">&bull; Input Suplier</a></li>
 <li class="sub"><a href="home.php?page=input_pasok">&bull; Input Pasok</a></li>
 <li><a href="#">Transaksi<span style="float:right;"><img src="../images/icon/file.PNG" width="20" height="20" /></span></a></li>
  <li class="sub"><a href="transaksi.php">&bull; Data Transaksi L/BL</a></li>
 </ul>
 </div>
 <div id="konten-tengah">
   <?php
   include "main.php";
   ?>
 </div>
</body>
</html>
