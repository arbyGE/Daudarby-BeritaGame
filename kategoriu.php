<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.css">
<link rel="stylesheet" href="search.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beritagame
    <style>
        span {
            color: rgb(75, 94, 88);
        }
        .j {
            font-family: sans-serif;
        }
    </style>
    </title>
</head>
<body>
<body  class="bg-secondary" class="container">
    <b>
    <div class="menu">
        <ul class="list_menu">
            <li><a href="index.php">HOME</a.</li>
            <li><a href="trending3.php">TRENDING</a><li>
            <li class="dropdown">
                <a href="kategoriu.php" class="dropbtn">BERITA</a>
                <div class="dropdown-content">
                    <a href="#">TERBARU</a>
                    <a href="#">TERLAMA</a>
                </div>   
        </ul>  
    </div></b>
    <form action="" method="get">
	<input type="text" name="cari" placeholder="kategori atau judul">
	<input type="submit" value="cari">
</form>
 
<?php 
include "koneksi.php";
include "config.php";
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	
}
?>
 <button><a target="_blank" href="export.php">Export to Excel</a></button>
  
    <table  border="1" align=center style="background-color: white;" class="table table-striped table-hover">
        <div>
        <tr>
            <th>ID BERITA</th>
            <th>KATEGORI</th>
            <th>JUDUL</th>
        </tr>
        <?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
        $ambildata = mysqli_query($koneksi, "select * from berita where kategori like '%".$cari."%' or
        berita like '%".$cari."%'");		
	}else{
		$ambildata = mysqli_query($koneksi, "select * from berita");		
	}
	$no = 1;
	while($tampil = mysqli_fetch_array($ambildata)){
	?>
	<tr>
        
		<td><?php echo $no++; ?></td>
		<td><?php echo $tampil['kategori']; ?></td>
        <td><?php echo $tampil['berita']; ?></td>
	</tr>
	<?php } ?>
</table>

</body>
</html>