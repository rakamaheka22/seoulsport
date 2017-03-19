<?php
include "config/koneksi.php";

$vote=$_POST['vote'];
$sql="Insert into voting (vote) values ('$vote')";
$q=mysql_query($sql);

if($q){
	echo header("location:index.php");
}else{
	echo mysql_error();
}
?>
