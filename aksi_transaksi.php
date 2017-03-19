<?php

include "config/koneksi.php";
$id=$_GET['id'];
$nama_customer=$_POST['nama_customer'];
$kota_customer=$_POST['kota_customer'];
$alamat_customer=$_POST['alamat_customer'];
$no_telepon=$_POST['no_telepon'];
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah_beli=$_POST['jumlah_beli'];

$kode_customer=$_POST['kode_customer'];
$kode_beli=$_POST['kode_beli'];

$sql=mysql_query("select * from customer where kode_customer='$id'");
$cek=mysql_fetch_array($sql);
function getLastTrans() { $querycount="SELECT MAX(id) AS LastID FROM customer"; $result=mysql_query($querycount) or die(mysql_error()); $row=mysql_fetch_array($result, MYSQL_ASSOC); return $row['LastID']; }

function FormatNoTrans($num) { $num=$num+1; switch (strlen($num)) {       case 1 : $NoTrans = "00".$num; break;     case 2 : $NoTrans = "0".$num; break;     default: $NoTrans = $num;        }           return $NoTrans; }

$LastID="CUS".FormatNoTrans(getLastTrans());

$sql2="INSERT INTO customer(kode_customer,nama_customer,alamat_customer,kota_customer,no_telepon) VALUES ('$LastID','$nama_customer','$alamat_customer','$kota_customer','$no_telepon')";
$query=mysql_query($sql2)or die(mysql_error());


$sql3=mysql_query("select * from pembelian where kode_beli='$id'");
$cek3=mysql_fetch_array($sql3);
function getBELTrans() { $querycount2="SELECT MAX(id) AS LastBEL FROM pembelian"; $result2=mysql_query($querycount2) or die(mysql_error()); $row2=mysql_fetch_array($result2, MYSQL_ASSOC); return $row2['LastBEL']; }

function ForNoTrans($num2) { $num2=$num2+1; switch (strlen($num2)) {       case 1 : $NoTrans2 = "00".$num2; break;     case 2 : $NoTrans2 = "0".$num2; break;     default: $NoTrans2 = $num2;        }           return $NoTrans2; }

$LastBEL="BEL".ForNoTrans(getBELTrans());

$sql4="INSERT INTO pembelian(kode_beli,kode_barang,kode_customer,tanggal,jumlah_beli,status) VALUES ('$LastBEL','$kode_barang','$LastID',now(),'$jumlah_beli','BELUM LUNAS')";
$query2=mysql_query($sql4) or die(mysql_error());
	if($query and $query2) {
		echo "<script>alert('Transaksi Berhasil ! '); document.location='index.php'</script>";
}else{
	echo "GAGAL". mysql_error ();
}


?>