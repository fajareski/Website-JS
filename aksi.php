<?php
include('koneksi.php');
if(isset($_POST['ttambah'])){ //['ttambah'] merupakan name dari button di form tambah
	$id_peserta	= $_POST['id_peserta'];
	$kode_transaksi	= $_POST['kode_transaksi'];
	$nama	= $_POST['nama'];
	$no_rekening	= $_POST['no_rekening'];
    $paketbelajar	= $_POST['paketbelajar'];
    $jenjang	= $_POST['jenjang'];
	$jurusan	= $_POST['jurusan'];
    $kelas	= $_POST['kelas'];
	$matapelajaran	= $_POST['matapelajaran'];
    $gambarpost	= $_POST['gambarpost'];
    $file_isi	= $_POST['file_isi'];
	$programbimbel	= $_POST['programbimbel'];
    $gelombang	= $_POST['gelombang'];
    $durasi_voucher	= $_POST['durasi_voucher'];
	$tanggal_aktif	= $_POST['tanggal_aktif'];
    $tanggal_berakhir	= $_POST['tanggal_berakhir'];
    $harga	= $_POST['harga'];
	$statuspost	= $_POST['statuspost'];
	
	
    $query	= 'insert into admin_js (id_peserta,kode_transaksi,nama,no_rekening,paketbelajar,jenjang,jurusan,kelas,matapelajaran,gambarpost,file_isi,programbimbel,gelombang,durasi_voucher,tanggal_aktif,tanggal_berakhir,harga,statuspost) values ("'.$id_peserta.'","'.$kode_transaksi.'","'.$nama.'","'.$no_rekening.'","'.$paketbelajar.'","'.$jenjang.'","'.$jurusan.'","'.$kelas.'","'.$matapelajaran.'","'.$gambarpost.'","'.$file_isi.'","'.$programbimbel.'","'.$gelombang.'","'.$durasi_voucher.'","'.$tanggal_aktif.'","'.$tanggal_berakhir.'","'.$harga.'","'.$statuspost.'")';
	$result	= mysqli_query($koneksi,$query);
	
	if($result){
		header('location: aku.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}

if(isset($_POST['tedit'])){ //['ttambah'] merupakan name dari button di form tambah
	$id_peserta	= $_POST['id_peserta'];
	$kode_transaksi	= $_POST['kode_transaksi'];
	$nama	= $_POST['nama'];
	$no_rekening	= $_POST['no_rekening'];
    $paketbelajar	= $_POST['paketbelajar'];
    $jenjang	= $_POST['jenjang'];
	$jurusan	= $_POST['jurusan'];
    $kelas	= $_POST['kelas'];
	$matapelajaran	= $_POST['matapelajaran'];
    $gambarpost	= $_POST['gambarpost'];
    $file_isi	= $_POST['file_isi'];
	$programbimbel	= $_POST['programbimbel'];
    $gelombang	= $_POST['gelombang'];
    $durasi_voucher	= $_POST['durasi_voucher'];
	$tanggal_aktif	= $_POST['tanggal_aktif'];
    $tanggal_berakhir	= $_POST['tanggal_berakhir'];
    $harga	= $_POST['harga'];
	$statuspost	= $_POST['statuspost'];
	
    $query	= 'update admin_js set id_peserta="'.$id_peserta.'",kode_transaksi="'.$kode_transaksi.'",nama="'.$nama.'",no_rekening="'.$no_rekening.'",paketbelajar="'.$paketbelajar.'",jenjang="'.$jenjang.'",jurusan="'.$jurusan.'",kelas="'.$kelas.'",
    matapelajaran="'.$matapelajaran.'",gambarpost="'.$gambarpost.'",file_isi="'.$file_isi.'",programbimbel="'.$programbimbel.'",gelombang="'.$gelombang.'",durasi_voucher="'.$durasi_voucher.'",
    tanggal_aktif="'.$tanggal_aktif.'",tanggal_berakhir="'.$tanggal_berakhir.'",harga="'.$harga.'",statuspost="'.$statuspost.'"';
	$result	= mysqli_query($koneksi,$query);
	
	if($result){
		header('location: aku.php'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa
	}
	else{
		echo 'Gagal';
	}
}
?>