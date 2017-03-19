<br />
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Input Pasok</b></td></tr></table></div>
<br />
<form action="tambahpasok.php" method="post" enctype="multipart/form-data">
<font face="Aller" size="-1">
<table style="margin-left:20px;" width="500" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="106">Kode Pasok</td>
    <td width="3">:</td>
    <td width="361"><input type="text" name="kode_pasok" /></td>
  </tr>
  <tr>
    <td>Kode Barang</td>
    <td>:</td>
    <td><input type="text" name="kode_barang" /></td>
  </tr>
  <tr>
    <td>Kode Suplier</td>
    <td>:</td>
    <td><input type="text" name="kode_suplier" /></td>
  </tr>
  <tr>
    <td>Tanggal Pasok</td>
    <td>:</td>
    <td><select name="tanggal">
    <option value="">--Tanggal--</option>
      <?php
	  	  for($a=1;$a<=31;$a+=1)
		  {
	      echo "<option value=$a>$a</option>";
		  }
	  ?>
    </select> 
    <select name="bulan">
    <option value="">--Bulan--</option>
      <?php
	  	  for($b=1;$b<=12;$b+=1)
		  {
	      echo "<option value=$b>$b</option>";
		  }
	  ?>
    </select>
    <select name="tahun">
    <option value="">--Tahun--</option>
      <?php
	  	  for($c=1990;$c<=2014;$c+=1)
		  {
	      echo "<option value=$c>$c</option>";
		  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td>Jumlah Pasok</td>
    <td>:</td>
    <td><input type="text" name="jumlah_pasok" /></td>
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