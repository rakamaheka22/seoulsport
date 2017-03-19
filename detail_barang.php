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
    <form method="post" action="search.php" enctype="multipart/form-data">
   <table align="left" cellspacing="0" style="background:#FFF;-webkit-border-radius:2px; -moz-border-radius:2px; margin-top:75px; margin-left:320px;
   border:1px solid #009; margin-right:20px">
    <tr>
     <td><input type="text" name="kata" placeholder="  Search.." style="border:0px; width:150px; outline:none;" /></td>
     <td><input type="submit" name="submit" style="background:url(images/cari.png) no-repeat; background-size:20px; border:0px; width:20px; border-left:1px solid #CCC;" width="20" height="20" value="" /></td>
    </tr>
   </table>
   </form>
    </td>
    </tr>
    </table>

</div>
</center>
</div>
<center>
<div id="wrapper">
  <center>
  <div id="judul">
  <img src="images/beli.png" width="204" height="59" align="left" />
  </div>
  </center>
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
  <div id="wrapper2">
  </div>
  <table width="1068" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="75%" align="center" valign="top">
      <br />
    <br />
    <br />
    <br />
    <br />
      <?php
	include "config/koneksi.php";
	$id=$_GET['id'];
	$sql=mysql_query("SELECT * FROM barang WHERE kode_barang='$id'");
	if($data=mysql_fetch_array($sql)){
		?>
    <form method="post" action="transaksi.php?id=<?php echo $data['0']; ?>">
    <table width="95%" bgcolor="#FFFFFF" cellpadding="20px">
    <tr>
    <td>
  <?php
		echo "";?>
        <font face="neo Sans"><h3 style="margin-bottom: 0px"><?php echo $data['nama_barang']; ?></h3></font>
        <br />
        <font face="neo Sans">
        <table width="500" cellspacing="10" cellpadding="0">
       <tr>
       <td valign="top"><img src="foto/<?php echo $data['gambar_barang'];?>" width="200" height="230" /></td>
       <td><table width="500" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="125">Kode Barang</td>
    <td width="20">:</td>
    <td width="355"><font face="neo Sans" color="#0033FF"><?php echo $data['kode_barang'];?></font></td>
  </tr>
  <tr>
    <td>Nama Barang</td>
    <td>:</td>
    <td><font face="neo Sans" color="#0033FF"><?php echo $data['nama_barang'];?></font></td>
  </tr>
    <tr>
    <td>Jenis Barang</td>
    <td>:</td>
    <td><font face="neo Sans" color="#0033FF"><?php echo $data['jenis_barang'];?></font></td>
  </tr>
  <tr>
    <td>Ukuran Barang</td>
    <td>:</td>
    <td><font face="neo Sans" color="#0033FF"><?php echo $data['ukuran_barang'];?></font></td>
  </tr>
  <tr>
    <td>Harga Barang</td>
    <td>:</td>
    <td><font face="neo Sans" size="+1" color="#FF6600"><b><?php echo "Rp.".substr($data['harga_barang'],0,3).".".substr($data['harga_barang'],3,3).",00";?></b></font></td>
  </tr>
    <tr>
    <td valign="top">Deskripsi</td>
    <td valign="top">:</td>
    <td><font face="neo Sans" color="#0033FF"><?php echo $data['deskripsi'];?></font></td>
  </tr>
   <tr>
    <td valign="top"></td>
    <td valign="top"></td>
    <td><BR /><input id="btn1" type="submit" value="BELI SEKARANG" /></td>
  </tr>
</table>
</td>
       </tr>
       </table>
       </font>

        <?php
	}else{
			
		}
	?>
    </td></tr></table></form>
        </td>
    <td width="25%" valign="top" align="center">
   <br />
   <br />
   <br />
    <table width="95%" cellspacing="0" cellpadding="0">
    <tr>
    <td style="background:linear-gradient(#eaeaea,#ccc)"><img src="gambar_sponsor/kategori.png" width="170" height="30" /></td>
    </tr>
    <tr>
    <td style="border:1px dashed #ccc; padding:5px;" >
<ul style="list-style:none; margin:0px auto; padding:0px;">
  <li style="border-bottom:1px dashed #ccc; padding:5px 0 0 0;"><a class="kategori" href="dataproduk.php?page=tampil_jersey">JERSEY</a></li>
  <li style="border-bottom:1px dashed #ccc; padding:5px 0 0 0;"><a class="kategori" href="dataproduk.php?page=tampil_celana">CELANA</a></li>
  <li style="border-bottom:1px dashed #ccc; padding:5px 0 0 0;"><a class="kategori" href="dataproduk.php?page=tampil_jaket">JAKET</a></li>
  <li style="border-bottom:1px dashed #ccc; padding:5px 0 0 0;"><a class="kategori" href="dataproduk.php?page=tampil_tas">TAS</a></li>
  <li style="border-bottom:1px dashed #ccc; padding:5px 0 0 0;"><a class="kategori" href="dataproduk.php?page=tampil_kaos_kaki">KAOS KAKI</a></li>
  <li style="border-bottom:1px dashed #ccc; padding:5px 0 0 0;"><a class="kategori" href="dataproduk.php?page=tampil_sepatu">SEPATU</a></li>
  <li style="border-bottom:1px dashed #ccc; padding:5px 0 0 0;"><a class="kategori" href="dataproduk.php?page=tampil_bola">BOLA</a></li>
  </ul>
    </td>
    </tr>
    </table>
     <br />
    <table width="95%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td style="background:linear-gradient(#eaeaea,#ccc)"><img src="gambar_sponsor/norek.png" width="170" height="30" /></td>
    </tr>
    <tr>
    <td align="center" style="border:1px dashed #ccc; padding:5px;">
    <br />
    <table width="90%" cellspacing="0" cellpadding="0">
    <tr>
    <td><img src="gambar_sponsor/BNI.png" /></td>
    <td><font face="Aller" size="2">1625274847369789(Raka)</font></td>
    </tr>
    <tr>
    <td><img src="gambar_sponsor/MANDIRI.png" /></td>
    <td><font face="Aller" size="2">2144556576787879(Rizky)</font></td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    <br />
    <table width="95%" cellspacing="0" cellpadding="0">
    <tr>
    <td style="background:linear-gradient(#eaeaea,#ccc)"><img src="gambar_sponsor/via.png" width="170" height="30" /></td>
    </tr>
    <tr>
    <td align="center" style="border:1px dashed #ccc; padding:5px;">
    <img src="gambar_sponsor/JNE.jpg" width="100" height="60" /><br />
    <img src="gambar_sponsor/Logo-Tiki.jpg" width="100" height="30" />
    <br />
    </td>
    </tr>
    </table>
<br />
<table width="95%" cellspacing="0" cellpadding="0">
    <tr>
    <td style="background:linear-gradient(#eaeaea,#ccc)"><img src="gambar_sponsor/vote.png" width="170" height="30" /></td>
    </tr>
    <tr>
    <td style="font-family:'neo Sans'; font-size:14px; border:1px dashed #ccc; padding:5px;">
    <BR />
Apakah anda puas dengan fasilitas dan berlangganan di Seoul Sport?
<br />
<form method="post" action="voting.php">
<input name="vote" type="radio" value="YA" />YA<BR />
<input name="vote" type="radio" value="TIDAK" />TIDAK<br />
<input id="btn1" type="submit" value="KIRIM" />
</form>
<br />
<br />
    </td>
    </tr>
    </table>
 <br />
   <table width="95%" cellspacing="0" cellpadding="0">
    <tr>
    <td style="background:linear-gradient(#eaeaea,#ccc)"><img src="gambar_sponsor/ad.png" width="170" height="30" /></td>
    </tr>
    <tr>
    <td style="font-family:'neo Sans'; font-size:14px; border:1px dashed #ccc; padding:5px;">
<img src="images/iklan.gif" />
<br />
    </td>
    </tr>
    </table> 
 
    </td>
    </tr>
    </table>

    
    </td>
  </tr>
  <tr>
   <td colspan="2" align="center">
   
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
</html>