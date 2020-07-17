<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body bgcolor="#CCCCCC">
<h2><p align="center">EDIT DATA
<?php
if(isset($_GET['ni'])){ //['ttambah'] merupakan name dari button di form tambah
    $ni	= $_GET['ni'];
    $query= mysqli_query($koneksi, 'select * from admin_js where id_peserta = "'.$ni.'"');
    $data = mysqli_fetch_array($query);
	$kode_transaksi	= $data['kode_transaksi'];
	$nama	= $data['nama'];
	$no_rekening	= $data['no_rekening'];
    $paketbelajar	= $data['paketbelajar'];
    $jenjang	= $data['jenjang'];
	$jurusan	= $data['jurusan'];
    $kelas	= $data['kelas'];
	$matapelajaran	= $data['matapelajaran'];
    $gambarpost	= $data['gambarpost'];
    $file_isi	= $data['file_isi'];
	$programbimbel	= $data['programbimbel'];
    $gelombang	= $data['gelombang'];
    $durasi_voucher	= $data['durasi_voucher'];
	$tanggal_aktif	= $data['tanggal_aktif'];
    $tanggal_berakhir	= $data['tanggal_berakhir'];
    $harga	= $data['harga'];
    $statuspost	= $data['statuspost'];   
}
else{
	$kode_transaksi	= '';
	$nama	= '';
	$no_rekening	='' ;
    $paketbelajar	='' ;
    $jenjang	='' ;
	$jurusan	='' ;
    $kelas	='' ;
	$matapelajaran	='' ;
    $gambarpost	='' ;
    $file_isi	='' ;
	$programbimbel	='' ;
    $gelombang	= '';
    $durasi_voucher	= '';
	$tanggal_aktif	= '';
    $tanggal_berakhir	= '';
    $harga	='' ;
    $statuspost	='' ;   
}
?>
</p></h2>
<form method="post" action="aksi.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">ID Peserta</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="id_peserta" type="text" size="10" value="<?php echo $_GET['ni']; ?>" readonly="readonly">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Kode Transaksi</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="kode_transaksi" value="<?php echo $kode_transaksi; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="nama" type="text" size="50" value="<?php echo $nama; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nomor Rekening</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="no_rekening" type="text" size="10" value="<?php echo $no_rekening; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Paket Belajar</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="paketbelajar" value="<?php echo $paketbelajar; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jenjang</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="jenjang" type="text" size="50" value="<?php echo $jenjang; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Jurusan</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="jurusan" type="text" size="50" value="<?php echo $jurusan; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Kelas</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <select name="kelas" value="<?php echo $kelas; ?>">
	  	<option selected="selected">--Pilih--</option>
		<option value="1">1</option>
		<option value="2" >2</option>
		<option value="3">3</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Mata Pelajaran</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="matapelajaran" type="text" size="50" value="<?php echo $matapelajaran; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Upload Bukti Pembayaran</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="gambarpost" type="file" size="10" value="<?php echo $gambarpost; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Isi Modul</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="file" name="file_isi" value="<?php echo $file_isi; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Program Bimbel</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="programbimbel" type="text" size="50" value="<?php echo $programbimbel; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Gelombang</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="gelombang" type="number" size="50" value="<?php echo $gelombang; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Durasi Voucher</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="date" name="durasi_voucher" value="<?php echo $durasi_voucher; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Tanggal Aktif</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="tanggal_aktif" type="date" size="50" value="<?php echo $tanggal_aktif; ?>" >
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Tanggal Berakhir</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="tanggal_berakhir" type="date" size="50" value="<?php echo $tanggal_berakhir; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Harga</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="harga" type="text" size="50" value="<?php echo $harga; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Status</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="statuspost" type="number" size="50"value="<?php echo $statuspost; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="Edit"></td>
  </tr>

</table>
</form>
</body>
</html>