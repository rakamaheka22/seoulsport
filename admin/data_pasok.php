<br>
<div id="kolom">
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Data Pasok</b></td></tr></table></div>
<br>
<table width="950px" cellspacing="0" align="center" style="font-family:Aller; font-size:14px; border:1px solid #2946AB;" border="1">
  <tr>
    <td width="5" class="tabelmenu" align="center">No</td>
    <td width="217" class="tabelmenu" align="center">Kode Pasok</td>
    <td width="172" class="tabelmenu" align="center">Kode Barang</td>
    <td width="113" class="tabelmenu" align="center">Kode Suplier</td>
    <td width="120" class="tabelmenu" align="center">Tanggal</td>
    <td width="111" class="tabelmenu" align="center">Jumlah Pasok</td>
    <td width="137" class="tabelmenu" align="center">Aksi</td>
  </tr>
  <?php
$con = new mysqli("localhost","root","","olahraga");
if (!$con)
  {
  die('Could not connect: ' . mysqli_connect_error());
  }

$dataPerPage = 10;
if(isset($_GET['halaman']))
{
    $noPage = $_GET['halaman'];
} 
else $noPage = 1;

$offset = ($noPage - 1) * $dataPerPage;

$query   = "SELECT COUNT(*) as jumData FROM pasok";
$hasil  = mysqli_query($con,$query);
$data     = mysqli_fetch_array($hasil);
$jumData = $data['jumData'];

$sql=("select * from pasok LIMIT $offset, $dataPerPage");
$query2=mysqli_query($con ,$sql);
	$numrow=mysqli_num_rows($query2);
$no=1;
	 	if($numrow==0)
	{
		echo "<tr><td colspan=6 class='data'>Nothing article</td></tr>";
	}
	else
	{
while($c=mysqli_fetch_array($query2)){
	echo "
	<tr>
	<td align='center'>$no</td>
	<td>$c[kode_pasok]</td>
	<td>$c[kode_barang]</td>
	<td>$c[kode_suplier]</td>
	<td align='center'>$c[tanggal]</td>
	<td align='center'>$c[jumlah_pasok]</td>
	"; ?>
<?php echo " 
<td align='center'><a href='cekedit_pasok.php?id=$c[0]'><input  type='submit' value='Edit' /></a> <a href='delete_pasok.php?id=$c[0]'><input  type='submit' value='Delete' /></a></td> ";?>
<?php echo "
	";
	$no++;
}
	}
	
?>
</tr>
</table>
<?php
$jumPage = ceil($jumData/$dataPerPage);
	echo "<br><Br><div id='paging' style='margin-left:25px;'>";
	// menampilkan link previous
	echo "Pages (".$jumPage.") : ";
	if ($noPage > 1) echo  "<a class='page' href='?halaman=".($noPage-1)."'>&lt;&lt; Prev</a>";
	
	// memunculkan nomor halaman dan linknya
	$showPage=0;
	for($page = 1; $page <= $jumPage; $page++)
	{
		if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage)) 
		{   
			if (($showPage == 1) && ($page != 2))
				echo "..."; 
				
			if (($showPage != ($jumPage - 1)) && ($page == $jumPage))
				echo "...";
				
			if ($page == $noPage)
				echo " <b>".$page."</b> ";
			else 
				echo " <a class='page' href='?halaman=".$page."'>".$page."</a> ";
			$showPage = $page;          
		}
	}
	
	// menampilkan link next
	if ($noPage < $jumPage) echo "<a class='page' href='?halaman=".($noPage+1)."'>Next &gt;&gt;</a>";
	echo "</div>";
?>
</div>
<br>