<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>beritagame</title>
    <style>
        span {
            color: rgb(75, 94, 88);
        }
        .j {
            font-family: sans-serif;
        }
    </style>
</head>
<body  class="bg-secondary" class="container">
    <b>
    <div class="menu">
        <ul class="list_menu">
            <li><a href="beranda_admin.php">HOME</a.</li>
            <li><a href="trending_admin.php">TRENDING</a><li>
            <li class="dropdown">
                <a href="kategori.php" class="dropbtn">BERITA</a>
                <div class="dropdown-content">
                    <a href="kategori1.php">KATEGORI</a>
                    <a href="#">TERBARU</a>
                    <a href="#">TERLAMA</a>
                </div>  
         </ul>
         <li style="float:right;"><a href="logout.php">LOGOUT</a></li>      
    </div></b>
    <div class="j">
     <h2 style="text-align: center;">DAFTAR KATEGORI</h2>
    </div>
     <table border="1" align=center style="background-color: white;" class="table table-striped table-hover">
        <tr>
            <th>ID BERITA</th>
            <th>KATEGORI</th>
            <th colspan="2" style=text-align:center;>AKSI</th>
        </tr>

<?php
 include "koneksi.php";
 $no=1;
 $ambildata = mysqli_query($koneksi,"select * from kategori");
 while ($tampil = mysqli_fetch_array($ambildata)){
    echo"
    <tr>
    <td>$tampil[id_berita]</td>
    <td>$tampil[kategori]</td>
    <td><a href='?kode=$tampil[id_berita]'>hapus</a></td>
    <td><a href='ubahberita.php?kode=$tampil[id_berita]'>ubah</a></td>
    </tr>";
    $no++;
 }
 ?>
  <li><a href="tambahkategori.php" style="text-decoration: none;"><button>TAMBAH KATEGORI</button></a></li>
  <li><a style="text-decoration: none;" a target="_blank" href="export2.php"><button>Export To Excel</button></a></li>
  </body>
</html> 

<?php
if(isset($_GET['kode'])) {

    mysqli_query($koneksi, "delete from kategori where id_berita='$_GET[kode]'");

    echo "<center>DATA TELAH DIHAPUS </center>"; 
    echo "<meta http-equiv=refresh content=1;URL='kategori1.php'>";
}
?>

<?php
include "session.php";
include "koneksi.php";
?>