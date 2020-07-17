<?php
$db_host		= 'localhost'; 
$db_usn		= 'root'; //nama username
$db_pwd		= ''; //password jika tadak ada bisa di kosongi seperti contoh 
$db_name	= 'db_webjs'; //nama database

$koneksi	= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
if (!$koneksi){
	echo 'Tidak dapat terhubung ke database';
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<?php
$query	= 'select * from admin_js';
$result	= mysqli_query($koneksi,$query);
?>
<h2><strong><p align="center">ADMIN</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">ID Peserta</td>
    <td width="300" align="center" valign="middle" bgcolor="#00FFFF">Kode Transaksi</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Nama</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">No Rekening</td>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Paket Belajar</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Jenjang</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Jurusan</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Kelas</td>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Mata Pelajaran</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Bukti Pembayaran</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Isi Modul</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Program Bimbel</td>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Gelombang</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Durasi Voucher</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Tanggal Aktif</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Tanggal Berakhir</td>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Harga</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Status</td>
    </tr>
<?php
	while($data	= mysqli_fetch_array($result)){ 
?>
  <tr>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['id_peserta']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_transaksi']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['nama']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['no_rekening']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['paketbelajar']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['jenjang']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['jurusan']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kelas']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['matapelajaran']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['gambarpost']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['file_isi']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['programbimbel']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['gelombang']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['durasi_voucher']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['tanggal_aktif']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['tanggal_berakhir']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['harga']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['statuspost']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php?ni=<?php echo $data['id_peserta'];?>" title="Tambah">Tambah Data</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php?ni=<?php echo $data['id_peserta'];?>" title="Edit">Edit</a></td>
	  <td p align="center" bgcolor="#FFFFFF"><a href="hapusadmin.php?ni=<?php echo $data['id_peserta'];?>" onclick="return confirm('Yakin mau di hapus?');">Hapus</a></td>
  </tr>
<?php
}
?>
</table>
</body>
</html>