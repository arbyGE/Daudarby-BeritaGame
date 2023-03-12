<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>beritagame</title>
    <style>
       span{
      color: white;
      }
      .buat {
        position: initial;
      }
    </style>
</head>
<body  class="bg-secondary" class="container">
  <b>
    <div class="menu">
        <ul class="list_menu">
            <li><a href="beranda_admin.php">HOME</a></li>
            <li><a href="trending_admin.php">TRENDING</a><li>
            <a href="kategori.php" class="dropbtn">BERITA</a>
                <div class="dropdown-content">
                    <a href="kategori1.php">KATEGORI</a>
                    <a href="#">TERBARU</a>
                    <a href="#">TERLAMA</a>
                </div>
        </ul>
        <li style="float:right;"><a href="logout.php">LOGOUT</a></li>          
    </div></b>
    <div class= "ket_game">
     
    
    <div class= "center">


      <div class= "keterangan">
        <div class= "ket_mobilelegend">
          <img src= "ML.jfif">
          <p>Mobile Legends: Bang Bang atau ML merupakan game MOBA yang dirilis oleh Moontoon. 
            Game ini bisa dimainkan di ponsel Android maupun IOS. 
            Dalam game MOBA ini akan ada 10 pemain yang akan dibagi menjadi 2 tim. 
            Aturan mainnya yakni 5 vs 5. Rata-rata permainan dalam 1 game yakni sekitar 15-20 menit.
            Setiap pemain bisa memilih 1 hero dari puluhan daftar hero yang tersedia.</p>
        </div>
        <div class= "ket_pubg">
          <img src= "PUBG.jfif">
          <P>PlayerUnknown's Battlegrounds (sering disingkat PUBG) adalah sebuah permainan battle royale,
             di mana 100 orang sekaligus dapat bermain secara daring. 
             Pemenang dari permainan ini adalah individu atau tim yang dapat bertahan hingga akhir.
             Pemain bisa bermain sendirian (solo), tim dengan dua orang (duo), dan tim dengan empat orang (squad).
             Pemain bisa mengundang teman di daftar teman (friend list) untuk bergabung ke dalam permainan 
             sebagai sebuah tim.</p>
        </div>
       </div>
    </div>
    <div class= "buat">
              <h3 style="text-align: center;">Berita <span>Game</span></h3>
              <h3 style="text-align: center;">Created By <span>DaudArby</span></h3>
  </body>
</html>
<?php
include "session.php";
include "koneksi.php";
?>