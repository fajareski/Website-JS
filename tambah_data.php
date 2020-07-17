<?php
sessio_start();
include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
        <h1>Beli Paket Belajar</h1>
        <form action="" method="POST">
    <div class="selimut" style="background-image: url(image/back2.jpg);">
            <div class="container2">
                <h1>Beli Paket Belajar</h1>
            </div>
                <hr>
                <div class="form">
                    <label for="nama"><b>Pilih Paket</b></label>
                    <select name="paketbelajar" id="places">
                        <option value="null" name="null">...Pilih Paket...</option>
                        <option value="Paket Kelas Online" name="paket1">Paket Kelas Online</option>
                        <option value="Paket Kelas Tatap Muka" name="paket2" >Paket Kelas Tatap Muka</option>
                        <option value="Paket Private Online" name="paket3" >Paket Private Online</option>
                        <option value="Paket Private Tatap Muka" name="paket4">Paket Private Tatap Muka</option>
                        <option value="Paket Try Out & E-Book" name="paket5">Paket Try Out & E-Book</option>
                        <option value="Paket Try Out, E-Book, dan Group Belajar" name="paket6">Paket Try Out, E-Book, dan Group Belajar</option>
                    </select>

                    <label for="nama"><b>Jenjang</b></label>
                    <select name="jenjang" id="places">
                        <option value="null">...Pilih Jenjang...</option>
                        <option value="(TK) Taman Kanak-Kanak" name="j1">(TK) Taman Kanak-Kanak</option>
                        <option value="(SD) Sekolah Dasar" name="j2">(SD) Sekolah Dasar</option>
                        <option value="UTBK (SD) Sekolah Dasar" name="j3">UN (SD) Sekolah Dasar</option>
                        <option value="(SMP) Sekolah Menengah Pertama" name="j4">(SMP) Sekolah Menengah Pertama</option>
                        <option value="UTBK (SMP) Sekolah Menengah Pertama" name="jg5">UN (SMP) Sekolah Menengah Pertama</option>
                        <option value="(SMA) Sekolah Menengah Atas" name="j6">(SMA) Sekolah Menengah Atas</option>
                        <option value="UTBK (SMA) Sekolah Menengah Atas" name="j7">UN (SMA) Sekolah Menengah Atas</option>
                        <option value="SIMAK S1/Vokasi" name="j8">SIMAK S1/Vokasi</option>
                        <option value="SIMAK S1 Internasional" name="j9">SIMAK S1 Internasional</option>
                        <option value="SIMAK Pascasarjana" name="j10">SIMAK Pascasarjana</option>
                        <option value="TOEFL/IELTS" name="j11">TOEFL/IELTS</option>
                        <option value="OTO BAPPENAS" name="j12">OTO BAPPENAS</option>
                        <option value="Lainnya" name="j13">Lainnya</option>
                    </select>

                    <label for="nama"><b>Jurusan</b></label>
                    <select name="jurusan" id="places">
                        <option value="null">...-...</option>
                        <option value="(IPA) Ilmu Pengetahuan Alam" name="ipa">(IPA) Ilmu Pengetahuan Alam</option>
                        <option value="(IPS) Ilmu Pengetahuan Sosial" name="ips">(IPS) Ilmu Pengetahuan Sosial</option>
                        <option value="IPC" name="ipc">IPC</option>
                    </select>

                    <label for="nama"><b>Kelas</b></label>
                    <select name="kelas" id="places">
                        <option value="null">...-...</option>
                        <option value="Kelas 1 SD" name="kelas1">Kelas 1 SD</option>
                        <option value="Kelas 2 SD" name="kelas2">Kelas 2 SD</option>
                        <option value="Kelas 3 SD" name="kelas3">Kelas 3 SD</option>
                        <option value="Kelas 4 SD" name="kelas4">Kelas 4 SD</option>
                        <option value="Kelas 5 SD" name="kelas5">Kelas 5 SD</option>
                        <option value="Kelas 6 SD" name="kelas6">Kelas 6 SD</option>
                        <option value="Kelas 7 SMP" name="kelas7" >Kelas 7 SMP</option>
                        <option value="Kelas 8 SMP" name="kelas8">Kelas 8 SMP</option>
                        <option value="Kelas 9 SMP" name="kelas9" >Kelas 9 SMP</option>
                        <option value="Kelas 10 SMA" name="kelas10">Kelas 10 SMA</option>
                        <option value="Kelas 11 SMA" name="kelas11" >Kelas 11 SMA</option>
                        <option value="Kelas 12 SMA" name="kelas12">Kelas 12 SMA</option>
                    </select>

                    <label for="nama" name="matapelajaran" ><b>Mata Pelajaran</b></label>
                        <input type="checkbox" name="vehicle1" value="Ilmu Pengetahuan Alam">
                        <label for="vehicle1"> Ilmu Pengetahuan Alam </label><br>
                        <input type="checkbox" name="vehicle2" value="Matematika">
                        <label for="vehicle2">Matematika</label><br>
                        <input type="checkbox" name="vehicle3" value="Bahasa Indonesia">
                        <label for="vehicle3">Bahasa Indonesia</label><br>
                        <input type="checkbox" name="vehicle4" value="Bahasa Inggris">
                        <label for="vehicle4">Bahasa Inggris</label><br>
                        <input type="checkbox" name="vehicle5" value="Fisika">
                        <label for="vehicle5">Fisika</label><br>
                        <input type="checkbox" name="vehicle6" value="Kimia">
                        <label for="vehicle6">Kimia</label><br>
                        <input type="checkbox" name="vehicle7" value="Biologi">
                        <label for="vehicle7">Biologi</label><br>
                        <input type="checkbox" name="vehicle8" value="Sosiologi">
                        <label for="vehicle8">Sosiologi</label><br>
                        <input type="checkbox" name="vehicle9" value="Geografi">
                        <label for="vehicle9">Geografi</label><br>
                        <input type="checkbox" name="vehicle10" value="Sejarah">
                        <label for="vehicle10">Sejarah</label><br>
                        <input type="checkbox" name="vehicle11" value="Ekonomi">
                        <label for="vehicle11">Ekonomi</label><br>
                        <input type="checkbox" name="vehicle12" value="Pajak">
                        <label for="vehicle12">Pajak</label><br>
                        <input type="checkbox" name="vehicle13" value="Front End Coding">
                        <label for="vehicle13">Front End Coding</label><br>
                        <input type="checkbox" name="vehicle14" value="Back End Coding">
                        <label for="vehicle14">Back End Coding</label><br>
                        <input type="checkbox" name="vehicle15" value="(TPA) Tes Potensi Akademik">
                        <label for="vehicle15">(TPA) Tes Potensi Akademik</label><br>
                        <input type="checkbox" name="vehicle16" value="TOEFL/IELTS">
                        <label for="vehicle16">TOEFL/IELTS</label><br><br>

                    <label for="nama"><b>Program Bimbel</b></label>
                    <select name="programbimbel" id="places">
                        <option name ="null" value="null">...-...</option>
                        <option name="hemat" value="Hemat">Hemat</option>
                        <option name="intensif" value="Intensif">Intensif</option>
                        <option name="priority" value="Priority">Priority</option>
                    </select>

                    <label for="nama"><b>Gelombang</b></label>
                    <select name="gelombangbimbel" id="places">
                        <option value="null">...-...</option>
                        <option value="Gelombang 1">Gelombang 1</option>
                        <option value="Gelombang 2">Gelombang 2</option>
                        <option value="Gelombang 3">Gelombang 3</option>
                        <option value="Gelombang 4">Gelombang 4</option>
                        <option value="Gelombang 5">Gelombang 5</option>
                        <option value="Gelombang 6">Gelombang 6</option>
                        <option value="Gelombang 7">Gelombang 7</option>
                        <option value="Gelombang 8">Gelombang 8</option>
                        <option value="Gelombang 9">Gelombang 9</option>
                        <option value="Gelombang 10">Gelombang 10</option>
                    </select>


                    <label for="nama"><b>Durasi Bimbel</b></label>
                    <select name="durasibimbel" id="places">
                        <option value="null">...-...</option>
                        <option value="Satu Bulan">Satu Bulan</option>
                        <option value="Tiga Bulan">Tiga Bulan</option>
                        <option value="Enam Bulan">Enam Bulan</option>
                        <option value="Dua Belas Bulan">Dua Belas Bulan</option>
                        <option value="Dua Puluh Empat Bulan">Dua Puluh Empat Bulan</option>
                        <option value="Tiga Puluh Enam Bulan">Tiga Puluh Enam Bulan</option>
                    </select>
                <hr>
                <label>
                <input type="checkbox" checked="checked" name="setuju">Saya telah membaca, mengerti, memahami, dan setuju peraturan Jelajah Studies <a href="#">[Syarat & Ketentuan]</a>
                </label>
                <input type="submit" id="button" class="registerbtn" name="submit" value="Submit"></button>
                <input type="reset" id="button" class="registerbtn" name="batal" value="BATAL"></button>
                <hr/>
            </div>
        </div>
    </form>
    <?php
                  if(isset($_POST['submit'])){
                    $submit = mysqli_query($conn, "INSERT INTO formpembelianpaketbelajar VALUES (
                    NULL,
                    '".ucwords($_POST['paketbelajar'])."',
                    '".ucwords($_POST['jenjang'])."',
                    '".ucwords($_POST['jurusan'])."',
                    '".ucwords($_POST['kelas'])."',
                    '".ucwords($_POST['matapelajaran'])."',
                    '".ucwords($_POST['programbimbel'])."',
                    '".ucwords($_POST['gelombangbimbel'])."',
                    '".ucwords($_POST['durasibimbel'])."')");
                      if($submit){
                        echo "berhasil simpan";
                        }else {
                        echo "gagal simpan";
                          }
                        }
                    ?>
</body>
</html>
