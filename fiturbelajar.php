<?php
$db_host		= 'localhost'; 
$db_usn		= 'root'; //nama username
$db_pwd		= ''; //password jika tadak ada bisa di kosongi seperti contoh 
$db_name	= 'db_webjs'; //nama database

$db_link	= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
if (!$db_link){
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
$sql	= 'select * from admin_js';
$query	= mysqli_query($db_link,$sql);
?>
<h2><strong><p align="center">ADMIN</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">ID Peserta</td>
    <td width="200" align="center" valign="middle" bgcolor="#00FFFF">Kode Transaksi</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Email</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Nomor Telepon</td>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Paket Belajar</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Jenjang</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Jurusan</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Kelas</td>
    <td width="112" height="29" align="center" valign="middle" bgcolor="#00FFFF">Mata Pelajaran</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Kode Judul Modul</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Insert File Modul</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Edit Modul</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Delete Modul</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Kode Judul Kuis</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Insert File Kuis</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Edit Kuis</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Delete Kuis</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Passanggrade</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Durasi</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Aktif</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Start</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Akhir</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Kode Judul Video Belajar</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Insert File Video Belajar</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Edit Video Belajar</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Delete Video Belajar</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Kode Judul Video Pembahasan</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Insert File Video Pembahasan</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Edit Video Pembahasan</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Delete Video Pembahasan</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Kode Judul Chat Forum</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Insert File Chat Forum</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Edit Chat Forum</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Delete Chat Forum</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Kode Judul Jadwal Kelas</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Insert Jadwal Kelas</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Edit Jadwal Kelas</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Delete Jadwal Kelas</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Kode Judul Try Out</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Insert Try Out</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Edit Try Out</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Delete Try Out</td>
    <td width="176" align="center" valign="middle" bgcolor="#00FFFF">Passanggrade</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Durasi Part 1</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Durasi Part 2</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Durasi Part 3</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Total Durasi</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Total Part</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Aktif</td>
    <td width="252" align="center" valign="middle" bgcolor="#00FFFF">Start</td>
    <td width="134" align="center" valign="middle" bgcolor="#00FFFF">Akhir</td>
    </tr>
<?php
	while($data	= mysqli_fetch_array($query)){ 
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
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_modul']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php">Insert File Modul</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php">Edit File Modul</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="hapus.php">Delete File Modul</a></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_kuis']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php">Insert File Kuis</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php">Edit File Kuis</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="hapus.php">Delete File Kuis</a></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['passanggrade']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['durasi']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['aktif']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['start']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['akhir']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_video_belajar']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php">Insert Video Belajar</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php">Edit Video Belajar</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="hapus.php">Delete Video Belajar</a></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_video_pembahasan']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php">Insert Video Pembahasan</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php">Edit Video Pembahasan</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="hapus.php">Delete Video Pembahasan</a></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_chat_forum']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php">Insert Chat Forum</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php">Edit Chat Forum</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="hapus.php">Delete Chat Forum</a></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_jadwal_kelas']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php">Insert Jadwal Kelas</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php">Edit Jadwal Kelas</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="hapus.php">Delete Jadwal Kelas</a></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['kode_tryout']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="tambah.php">Insert Try Out</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="edit.php">Edit Try Out</a></td>
    <td p align="center" bgcolor="#FFFFFF"><a href="hapus.php">Delete Try Out</a></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['passanggrade']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['durasi1']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['durasi2']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['durasi3']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['total_durasi']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['total_part']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['aktif']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['start']; ?></td>
    <td p align="center" bgcolor="#FFFFFF"><?php echo $data['akhir']; ?></td>
	</td>
  </tr>
<?php
}
?>
</table>
</body>
</html>