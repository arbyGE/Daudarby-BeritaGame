
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export</title>
</head>
<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data kategori.xls");
    ?>
    <center>
        <h1>EXPORT DATA</h1>
</center>
<table border="1" cellpadding="" align=center>
<tr>
            <th>ID BERITA</th>
            <th>KATEGORI</th>
        </tr>
        <?php
        $koneksi = mysqli_connect("localhost","root","","berita");
        $ambildata = mysqli_query($koneksi,"select * from kategori");
        $no = 1;
        while($tampil = mysqli_fetch_array($ambildata)){
        ?>
        <tr>
        <td><?php echo $no++; ?></td>
		<td><?php echo $tampil['kategori']; ?></td>
        </tr>
        <?php    
        }
        ?>
        </table>
</body>
</html>