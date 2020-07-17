<?php
include('connection.php');
$paketbelajar = $_POST['paketbelajar'];
$jenjang = $_POST['jenjang'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
$programbimbel = $_POST['programbimbel'];
$gelombnagbimbel = $_POST['gelombangbimbel'];
$durasibimbel = $_POST['durasibimbel'];



$insert = mysqli_query($connect, "INSERT INTO formpembelianpaketbelajar SET paketbelajar='$paketbelajar', jenjang='$jenjang', jurusan='$jurusan', kelas='$kelas', programbimbel='$programbimbel', gelombangbimbel='$gelombangbimbel', durasibimbel='$durasibimbel'");

if($insert)
    header('Location: carapembelianpaketbelajar.php');
    else
        echo 'Input data gagal';
?>
