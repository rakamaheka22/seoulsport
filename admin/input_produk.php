<br />
<div id="judulkolom" align="left"><table cellspacing="10"><tr><td><b>Input Produk</b></td></tr></table></div>
<br />
<form action="tambahdata.php" method="post" enctype="multipart/form-data">
<font face="Aller" size="-1">
<table style="margin-left:20px;" width="400" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="123">Kode Barang</td>
    <td width="2">:</td>
    <td width="245"><input type="text" name="kode_barang" /></td>
  </tr>
  <tr>
    <td>Nama Barang</td>
    <td>:</td>
    <td><input type="text" name="nama_barang" /></td>
  </tr>
  <tr>
    <td>Jenis Barang</td>
    <td>:</td>
    <td><select name="jenis_barang">
    <option value="JERSEY">Jersey</option>
    <option value="CELANA">Celana</option>
    <option value="JAKET">Jaket</option>
    <option value="TAS">Tas</option>
    <option value="KAOS KAKI">Kaos Kaki</option>
    <option value="SEPATU">Sepatu</option>
    <option value="BOLA">Bola</option>
    </select></td>
  </tr>
  <tr>
    <td>Ukuran Barang</td>
    <td>:</td>
    <td><input type="text" name="ukuran_barang" /></td>
  </tr>
  <tr>
    <td>Stok Barang</td>
    <td>:</td>
    <td><input type="text" name="stok_barang" /></td>
  </tr>
  <tr>
    <td>Gambar Barang</td>
    <td>:</td>
    <td><input type="file" name="foto" /></td>
  </tr>
  <tr>
    <td>Harga Barang</td>
    <td>:</td>
    <td><input type="text" name="harga_barang" /></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td>:</td>
    <td><textarea name="deskripsi"></textarea></td>
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