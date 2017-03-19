<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seoul Sport</title>
<link href="css/style2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function hurung () {
	var a = document.getElementById("audi");
	a.play();
}
</script>
<script type="text/javascript">
window.setTimeout("waktu ()", 1000)

function waktu () {
	var e = new Date ();
	setTimeout("waktu ()", 1000);
	document.getElementById("jam").innerHTML = e.getHours()+":"+e.getMinutes()+":"+e.getSeconds();
	
}
</script>
</head>

<body>
<div id="header">
<center>
<div id="header-dalam">
    <table width="100%" height="100%" border="0">
    <tr>
    <td width="50%">
    
    <table width="100%" border="0"  cellpadding="0" cellspacing="0">
    <tr>
    <td width="18%"><img src="images/LOGO.png" width="90" height="100" /></td>
    <td width="82%"><font face="Premier League" color="#2946AB" size="+3">SEOUL SPORT</font><br />
    <font face="Aller" size="-1" color="#333">Toko Olahraga Murah &amp; Berkualitas</font>
    </td>
    </tr>
    </table>

    </td>
       <td width="50%" valign="top" align="right">
    <div id="sosmed">
<a href="http://www.seoulsport.blogspot.com/"><img src="images/blo.PNG" width="100" height="100" /></a>
      <a href="http://www.facebook.com/seoulsport/"><img src="images/fb.PNG" width="100" height="100" /></a>
      <a href="http://www.google.com/"><img src="images/go.png" width="100" height="100" /></a>
      <a href="http://www.twitter.com/seoulsport"><img src="images/tw.png" width="100" height="100" /></a>
    </div>
    </td>
    </tr>
    </table>

</div>
</center>
</div>
<center>
<div id="wrapper">
<div class="non-semantic-protector">
   <div id="menu" >
   <table width="100%" align="left" style=" margin-top:2px; margin-bottom:2px; ">
       <tr>
        <td>
    <div class="ribbon-content">
     <ul>
      <li class="active"><center><a href="index.php" onclick="hurung ();"><img class="homeimage" src="images/home.png" width="20" height="20" /></a></center></li>
       <li class="kuning1"><a href="product.php" onclick="hurung ();">PRODUCT</a></li>
       <li class="kuning1"><a href="cara_pembayaran.php" onclick="hurung ();">CARA PEMBAYARAN</a></li>
       <li class="kuning1"><a href="about.php" onclick="hurung ();">ABOUT</a></li>
       <li class="kuning1"><a href="stok.php" onclick="hurung ();">STOK UPDATE</a></li>
     </ul>
    </div>
    <table align="right" style="border:1px solid #2946AB; background:#7B92DF; border-radius:3px; margin-top:4px; margin-right:30px;">
    <tr>
    <td style="color:#FFF; font-family:'neo Sans'; font-size:12px;">
   <?php
        $a=array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"); 
         $b=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September",
		  "Oktober","Nopember","Desember"); 
            echo $a[date("w")].", ".date("j")." ".$b[date("n")]." ".date("Y");
             ?>
    </td>
    <td width="55" align="right" style="border-left:1px solid #FFF">
    <div id="jam"></div>
    </td>
    </tr>
    </table>
        </td>
       </tr>
   </table>
   </div>
  </div>
  </div>
  <div class="slidershow effect2">
  <div id="kotak-slider"> 
             <div id="slideshow"> 
               <img src="gambar_slide/1.jpg" width="1068">  
               <img src="gambar_slide/2.jpg" width="1068">  
               <img src="gambar_slide/3.jpg" width="1068">  
               <img src="gambar_slide/4.jpg" width="1068">
             </div> 
  </div>
  </div>
  <br />
  <table width="1068" border="0" cellspacing="0" cellpadding="0">
  <tr>
     <td width="75%" valign="top" align="center">
    <br />
    <table width="95%" height="90%"><td style="background:linear-gradient(#eaeaea,#ccc); padding:5px; font-family:'Premier League'; color:#071c70; font-size:18px;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td width="5%" style="background:linear-gradient(#06C,#071c70);
    border-top-left-radius:50px;"></td>
    <td width="95%" style="padding-left:10px;">STOK UPDATE</td>
    </tr>
    </table>

    </td></tr>
    <tr><td valign="top">
     <br />
        <font face="Aller" size="-1">Update Barang Stok di Seoul Sport<br />Tanggal <?php  $a=array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"); 
         $b=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September",
		  "Oktober","Nopember","Desember"); 
            echo $a[date("w")].", ".date("j")." ".$b[date("n")]." ".date("Y"); ?> </font>
           
    <center>
     <table width="95%" border="0" cellspacing="10" cellpadding="10">
  <tr>
    <td valign="top">
    <FONT face="Aller">
	<ul><li>JERSEY<ul><?php
	include "config/koneksi.php";
	$data=mysql_query("select * from barang where jenis_barang='JERSEY'");
	while($dataproduk=mysql_fetch_array($data)){
		echo "<li><font color='#003399' size='-1'>$dataproduk[nama_barang]</font></li>";
	}
	
    ?></ul></li></ul></FONT></td>
    <td valign="top"><FONT face="Aller"><ul><li>BOLA<ul><?php
	include "config/koneksi.php";
	$data=mysql_query("select * from barang where jenis_barang='BOLA'");
	while($dataproduk=mysql_fetch_array($data)){
		echo "<li><font color='#003399' size='-1'>$dataproduk[nama_barang]</font></li>";
	}
	
    ?></ul></li></ul></FONT></td>
    <td valign="top"><FONT face="Aller"><ul><li>CELANA<ul><?php
	include "config/koneksi.php";
	$data=mysql_query("select * from barang where jenis_barang='CELANA'");
	while($dataproduk=mysql_fetch_array($data)){
		echo "<li><font color='#003399' size='-1'>$dataproduk[nama_barang]</font></li>";
	}
	
    ?></ul></li></ul></FONT></td>
  </tr>
  <tr>
    <td valign="top"><FONT face="Aller"><ul><li>JAKET<ul><?php
	include "config/koneksi.php";
	$data=mysql_query("select * from barang where jenis_barang='JAKET'");
	while($dataproduk=mysql_fetch_array($data)){
		echo "<li><font color='#003399' size='-1'>$dataproduk[nama_barang]</font></li>";
	}
	
    ?></ul></li></ul></FONT></td>
    <td valign="top"><FONT face="Aller"><ul><li>SEPATU<ul><?php
	include "config/koneksi.php";
	$data=mysql_query("select * from barang where jenis_barang='SEPATU'");
	while($dataproduk=mysql_fetch_array($data)){
		echo "<li><font color='#003399 'size='-1'>$dataproduk[nama_barang]</font></li>";
	}
	
    ?></ul></li></ul></FONT></td>
    <td valign="top"><FONT face="Aller"><ul><li>KAOS KAKI<ul><?php
	include "config/koneksi.php";
	$data=mysql_query("select * from barang where jenis_barang='KAOS KAKI'");
	while($dataproduk=mysql_fetch_array($data)){
		echo "<li><font color='#003399' size='-1'>$dataproduk[nama_barang]</font></li>";
	}
	
    ?></ul></li></ul></FONT></td>
  </tr>
  <tr>
    <td valign="top"><FONT face="Aller"><ul><li>TAS<ul><?php
	include "config/koneksi.php";
	$data=mysql_query("select * from barang where jenis_barang='TAS'");
	while($dataproduk=mysql_fetch_array($data)){
		echo "<li><font color='#003399' size='-1'>$dataproduk[nama_barang]</font></li>";
	}
	
    ?></ul></li></ul></FONT></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

    </center>
<br />
</td>
</tr>
</table>
    
    
    </td>
  </tr>
  <tr>
   <td align="center">
   
   <img src="images/Adidas 2_ copy.png" width="100" height="58" />
   <img src="images/Nike_logo2.png" width="100" height="35" />
   <img src="images/puma-logo-png-1.png" width="100" height="49" />
     <img src="images/WarriorSports_Logo.png" width="100" height="41" />
   <br />
   <br />
   </td>
  </tr>
  </table>
  <div id="footer">
  <table width="1068" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    
     <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="27%" align="center">
    <table width="97%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td width="20%"><img src="images/logobawah.png" width="90" height="100" /></td>
    <td width="80%"><font face="Premier League" color="#FFFFFF" size="+2">SEOUL SPORT</font><br />
    <font face="Aller" color="#FFFFFF" size="-2">Copyright &copy; seoulsport.com 2014 All Rights Reserved.</font>
    </td>
    </tr>
    </table>

    </td>
    <td width="15%" valign="top">
    
  <ul style="list-style:none;">
  <li><a style="color:#FFF; text-decoration:none; font-family:Aller; font-size:10px;" href="index.php">HOME</a></li>
  <li><a style="color:#FFF; text-decoration:none; font-family:Aller; font-size:10px;" href="product.php">PRODUCT</a></li>
  <li><a style="color:#FFF; text-decoration:none; font-family:Aller; font-size:10px;" href="cara_pembayaran.php">CARA PEMBAYARAN</a></li>
  <li><a style="color:#FFF; text-decoration:none; font-family:Aller; font-size:10px;" href="about.php">ABOUT</a></li>
  <li><a style="color:#FFF; text-decoration:none; font-family:Aller; font-size:10px;" href="sok.php">STOK UPDATE</a></li>
  </ul>
    
    </td>
    <td width="50%" valign="top">
    
     <ul style="list-style:none;">
  <li><a style="color:#FFF; text-decoration:none; font-family:Aller; font-size:10px;" href="admin/index.php">ADMIN</a></li>
  <li><a style="color:#FFF; text-decoration:none; font-family:Aller; font-size:10px;" href="#">MEMBER</a></li>
  </ul>
    
    </td>
    <td width="8%">&nbsp;</td>
  </tr>
  </table>
    
    </td>
  </tr>
  </table>

  </div>
</center>
</body>
<audio id="audi">
<source src="a.mp3" type="audio/mpeg"  />
</audio>
</html>