<?php
include('koneksi.php');
$ni	= $_GET['ni'];

$query 	= 'delete from admin_js where id_peserta="'.$ni.'"';
$result	= mysqli_query($koneksi,$query);
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

header('location: aku.php');
?>
