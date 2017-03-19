<?php
session_start ();
include "../config/koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from admin where username='$username' and password='$password'");
if ($cek=mysql_num_rows($query)){
	$_SESSION['username']=$username;
	echo header ("location:home.php?page=beranda");
}else{
	echo "";
}
?>
<html>
	<head>
		<title>Verifikasi Login</title>
		<style type="text/css">
body {
	background:#333;
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
	font-weight:bold;
}
#sign-box-warp{
	border:1px solid #AE0000;
	border-radius:10px;
	margin:auto;
	width:550px;
	height:auto;
	background-color:#FBB;
	margin-top:100px;
	-webkit-box-shadow:0px 1px 5px #000;
	-moz-box-shadow:0px 1px 5px #000;
	box-shadow:0px 1px 5px #000;
}

#title-box {
	background-color:#FF5353;
	border-top-left-radius:8px;
	border-top-right-radius:8px;
	height:30px;
	width:540px;
	border-bottom:1px solid #fff;
	font-weight:bold;
	font-size:16px;
	padding-top:5px;
	padding-left:10px;
}

#text-content{
	width:530px;
	height:100px;
	padding:10px 10px 10px 10px;
	text-align:center;
	color:#fff;
	margin-top:0px;
	padding-top:15px;
}

#btnerr {
	border:1px solid #930000;
	border-radius:5px;
	padding:7px 10px 7px 10px;
	background:linear-gradient(#FF4242, #C00);
	color:#FFF;
}
</style>
	</head>
	<body>
		
	<div id="sign-box-warp">
<div id="title-box">
<font color="#FFFFFF">ERROR LOGIN (<font color="#FF0000">X</font>)</font>
</div>
<div id="text-content">
Kombinasi Nama Pengguna dan Kata Sandi Salah<br>
Silahkan Anda Login Kembali<br><br>
<a href="index.php"><input type="button" value="Kembali" id="btnerr"></a>
</div>
</div>
	</body>
</html>