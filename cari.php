<?php
include "config/koneksi.php";

if ((isset($_POST['submit'])) and ($_POST['kata'] <> ""))
{ 
  $kata = $_POST['kata'];
  $cari2   = mysql_query("SELECT * FROM barang WHERE nama_barang LIKE '%$kata%' OR jenis_barang LIKE '%$kata%' OR harga_barang LIKE '%$kata%'");
$jumlah2 = mysql_num_rows($cari2);
$no=1;
 if ($jumlah2 > 0){
    echo "<font face='neo Sans'>Ditemukan <b>$jumlah2</b> produk dengan kata kunci <b>$kata</b>:</font><br><br> "; 
	$no=$posisi+1;
      ?><table width=95% cellspacing=0 align=center style="font-family:'neo Sans'; font-size:14px; border:1px solid #2946AB;" border=1><?php echo "
  <tr>
    <td width=5 style='background:linear-gradient(#2946AB, #1D3178);
	padding:10px;
	color:#FFF;' align=center>No</td>
    <td width=120 style='background:linear-gradient(#2946AB, #1D3178);
	padding:10px;
	color:#FFF;' align=center>Kode Barang</td>
    <td width=250 style='background:linear-gradient(#2946AB, #1D3178);
	padding:10px;
	color:#FFF;' align=center>Nama Barang</td>
	<td width=120 style='background:linear-gradient(#2946AB, #1D3178);
	padding:10px;
	color:#FFF;' align=center>Jenis Barang</td>
    <td width=120 style='background:linear-gradient(#2946AB, #1D3178);
	padding:10px;
	color:#FFF;' align=center>Ukuran Barang</td>
    <td width=131 style='background:linear-gradient(#2946AB, #1D3178);
	padding:10px;
	color:#FFF;' align=center>Harga Barang</td>
    <td width=137 style='background:linear-gradient(#2946AB, #1D3178);
	padding:10px;
	color:#FFF;' align=center>Detail</td>
  </tr>";
  
  while($r2=mysql_fetch_array($cari2)){
echo "
<tr bgcolor='#A3B3E9'>
    <td align='center'>$no</td>
    <td>$r2[kode_barang]</td>
    <td>$r2[nama_barang]</td>
    <td align='center'>$r2[jenis_barang]</td>
	<td align='center'>$r2[ukuran_barang]</td>
    <td align='center'>Rp".substr($r2['harga_barang'], 0, 3).".".substr($r2['harga_barang'], 3, 3).",00</td>
    <td align='center'>";?><a href="detail_barang.php?id=<?php echo $r2['kode_barang']; ?>"><img src="images/beli.gif" /></a><?php echo "</td>
	";
$no++;
  }echo "</tr>
	</table>";
  }
}

?>