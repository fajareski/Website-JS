<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Style-dashboard.css">
    <link rel="stylesheet" href="css/Style-header.css">
    <link rel="stylesheet" href="css/Style-Footer.css">
    <link rel="stylesheet" href="css/Style-pp.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="navbar1"> 
        <img class="logo" src="image/logo-headerJS.png">    
    </div>
    <nav class="navbar">
        <center>
            <div class="dropdown1">
                <span><a id="tombol" href="tentangkami.php">Tentang Kami</a>
                </span>
            </div>
            <div class="dropdown1">
                <span><a id="tombol" href="produkkami.php">Produk Kami</a>
                    <div class="dropdown-content1">
                        <p ><a id="menu" href="#">Paket Kelas Online</a></p>
                        <p ><a id="menu" href="#">Paket Kelas Tatap Muka</a></p>
                        <p ><a id="menu" href="#">Paket Private Online</a></p>
                        <p ><a id="menu" href="#">Paket Private Tatap Muka</a></p>
                        <p ><a id="menu" href="#">Paket TryOut & E-book</a></p>
                        <p ><a id="menu" href="#">Paket Mandiri</a></p>
                    </div>
                </span>
            </div>
            <div class="dropdown1">
                <span><a id="tombol" href="faq.php">FAQ</a>
                </span>
            </div>
            <div class="dropdown1">
                <span><a id="tombol" href="kontakkami.php">Kontak Kami</a></span>
            </div>
            <div class="dropdown2">
                <button onclick="myFunction()" class="dropbtn">Keluar</button>
                <div id="myDropdown" class="dropdown-content">
                        <img class="profil2" src="image/profile2.png" alt="">
                            <div class="data2">
                            <h2 id="Nama2">Admin</h2>
                            <h4 id="tel2">Voucher</h4>
                            <h4 id="mail2">Try Out</h4>
                            <h2 id="Nama2">Users</h2>
                            <h4 id="tel2">Ganti Password</h4>
                            <h4 id="mail2">Logout</h4>
                            <hr>
                            <a id="btn1" href="profilsiswa.php">Dashboard</a>
                            <a id="btn1" href="carapembelianpaketbelajar.php">Beli Paket Belajar</a>
                            <a id="btn1" href="jadwalbimbelkelastatapmuka.php">Jadwal Saya</a>
                            <a id="btn1" href="edit-profil.php">Edit Profil</a>
                            </div>
                </div>
              </div>
        </center>
        </nav>
<section class="selimut" style="background-image: url(image/back.jpg);">
<div class="row">
<section class="layout1" >
    <div class="formA">
        <div class="img-profile">
        <img class="profil" src="image/profile2.png" alt="">
        </div>
            <div class="data">
            <h2 id="Nama">Admin</h2>
    </div>
</div>
</section>
<section class="layout2">
<div class="formB"> 
    <div>
        <h1 id="judul">Dashboard</h1>
    </div>
    <div class="item">
        <button class="tablink" onclick="openPage('Modul', this, 'rgb(18, 114, 42)')" id="defaultOpen"> <b>Voucher</b></button>
    <button class="tablink" onclick="openPage('TO', this, '#00796b')" > <b>Konfirmasi Pembayaran</b></button>
    <button class="tablink" onclick="openPage('V-materi', this, '#00838f')"> <b> Try Out </b></button>
    <button class="tablink" onclick="openPage('V-pembahasan', this, '#0277bd')"> <b> Modul </b></button>
    <button class="tablink" onclick="openPage('Chat', this, '#3949ab')"> <b> Users </b> </button>
    <button class="tablink" onclick="openPage('Jadwal', this, '#673ab7')"><b> Ganti Password </b></button>

    <div id="Modul" class="tabcontent">
        <table class="tab1">
        <tr>
            <td class="jenis">
                <h4>Kode Transaksi</h4>
            </td>
            <td class="jenis">
                <h4>Paket</h4>
            </td>
            <td class="jenis">
                <h4>Tanggal</h4>
            </td>
            <td class="jenis">
                <h4>Nama</h4>
            </td>
            <td class="jenis">
                <h4>Nomor Rekening</h4>
            </td>
            <td class="jenis">
                <h4>Nominal</h4>
            </td>
            <td class="jenis">
                <h4>Status</h4>
            </td>
            <td class="jenis">
                <h4>Approval</h4>
            </td>
        </tr>
        <tr>
            <td class="isi">
                <h4 id="contoh">Kode Transaksi</h4>
            </td>
            <td class="isi">
                <h4 id="contoh" >Paket</h4>
            </td>
            <td class="isi">
                <h4 id="contoh" >Tanggal</h4>
            </td>
            <td class="isi">
                <h4 id="contoh">Nama</h4>
            </td>
            <td class="isi">
                <h4 id="contoh" >Nomor Rekening</h4>
            </td>
            <td class="isi">
                <h4 id="contoh" >Nominal</h4>
            </td>
            </td>
            <td class="isi">
                <h4 id="contoh" >Status</h4>
            </td>
            <td class="isi">
                <a href="#" class="button green">Approval</a>
            </td>
        </tr>
    </table>
    </div>

    <div id="TO" class="tabcontent">
        <table class="tab1">
            <h3 class="capt">Try Out Online</h3>
            <tr>
                <td class="jenis">
                    <h4>Kode Transaksi</h4>
                </td>
                <td class="jenis">
                    <h4>Judul Try Out</h4>
                </td>
                <td class="jenis">
                    <h4>Kode Try Out</h4>
                </td>
                <td class="jenis">
                    <h4>Action</h4>
                </td>
            </tr>
            <tr>
                <td class="isi">
                    <h4 id="contoh">Kode Transaksi</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Judul Buku</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Kode Buku</h4>
                </td>
                <td class="isi">
                    <a href="#" class="button green">Open</a>
                </td>
            </tr>
        </table>
    </div>

    <div id="V-materi" class="tabcontent">
    <table class="tab1">
            <h3 class="capt">Video Materi</h3>
            <tr>
                <td class="jenis">
                    <h4>Kode Transaksi</h4>
                </td>
                <td class="jenis">
                    <h4>Judul Video Materi</h4>
                </td>
                <td class="jenis">
                    <h4>Kode Video Materi</h4>
                </td>
                <td class="jenis">
                    <h4>Action</h4>
                </td>
            </tr>
            <tr>
                <td class="isi">
                    <h4 id="contoh">Kode Transaksi</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Judul Buku</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Kode Buku</h4>
                </td>
                <td class="isi">
                    <a href="#" class="button green">Open</a>
                </td>
            </tr>
        </table>
    </div>

    <div id="V-pembahasan" class="tabcontent">
        <table class="tab1">
            <h3 class="capt">Video Pembahasan</h3>
            <tr>
                <td class="jenis">
                    <h4>Kode Transaksi</h4>
                </td>
                <td class="jenis">
                    <h4>Judul Video Pembahasan</h4>
                </td>
                <td class="jenis">
                    <h4>Kode Video Pembahasan</h4>
                </td>
                <td class="jenis">
                    <h4>Action</h4>
                </td>
            </tr>
            <tr>
                <td class="isi">
                    <h4 id="contoh">Kode Transaksi</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Judul Buku</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Kode Buku</h4>
                </td>
                <td class="isi">
                    <a href="#" class="button green">Open</a>
                </td>
            </tr>
        </table>
    </div>

    <div id="Chat" class="tabcontent">
        <table class="tab1">
            <h3 class="capt">Chat Forum</h3>
            <tr>
                <td class="jenis">
                    <h4>Kode Transaksi</h4>
                </td>
                <td class="jenis">
                    <h4>Judul Chat Forum</h4>
                </td>
                <td class="jenis">
                    <h4>Kode Chat Forum</h4>
                </td>
                <td class="jenis">
                    <h4>Action</h4>
                </td>
            </tr>
            <tr>
                <td class="isi">
                    <h4 id="contoh">Kode Transaksi</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Judul Buku</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Kode Buku</h4>
                </td>
                <td class="isi">
                    <a href="#" class="button green">Open</a>
                </td>
            </tr>
        </table>
    </div>

    <div id="Jadwal" class="tabcontent">
        <table class="tab1">
            <h3 class="capt">Jadwal Kelas</h3>
            <tr>
                <td class="jenis">
                    <h4>Kode Transaksi</h4>
                </td>
                <td class="jenis">
                    <h4>Judul Kelas</h4>
                </td>
                <td class="jenis">
                    <h4>Kode Kelas</h4>
                </td>
                <td class="jenis">
                    <h4>Action</h4>
                </td>
            </tr>
            <tr>
                <td class="isi">
                    <h4 id="contoh">Kode Transaksi</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Judul Buku</h4>
                </td>
                <td class="isi">
                    <h4 id="contoh" >Kode Buku</h4>
                </td>
                <td class="isi">
                    <a href="#" class="button green">Open</a>
                </td>
            </tr>
        </table>
    </div>
    </div>
</div>
</section>
</div>
<section class="footer2">
    <table>
        <tr>
            <th id="Alamat1" >
                <h1 id="caption" >Jelajah Studies</h1>
                <p id="ket"> Alamat : GF2 Atlanta Apartemen
                    Jln. Margondaraya no. 28, Depok</p>
            </th>
            <center>
            <th class="logo">
                <img id="jp" src="image/logo/logo 1.png" alt="logo JP">
            </th>
            <th class="logo">
                <img id="js" src="image/logo/logo 2.png" alt="logo Js" style="width: 60%;">
            </th>
            <th class="logo">
                <img id="bmui" src="image/logo/logo 3.png" alt="logo bmui" style="width: 60%;">
            </th>
            <th class="logo">
                <img id="jm" src="image/logo/logo 4.png" alt="logo Jm" style="width: 70%;">
            </th>
            </center>
            <th>
                <h1 id="caption">Kontak Pelayanan</h1>
                <p id="ket">085284877333, 0817842419</p>
            </th>
        </tr>
    </table>
    <footer class="last">
        <h2 id="copy">copyright @Jelajah 2020</h2>
    </footer>
</section>
</section>
<script>
    function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
    <script>
                /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }
        }
    </script>
    </body>