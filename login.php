<?php
session_start();
include "koneksi.php";
?>
    <link rel="stylesheet" href="style.css">
    <body>
    <div class="center">
        <h1>LOGIN</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required name="username">
                <span></span>
                <label>Username: </label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password">
                <span></span>
                <label>Password: </label>
            </div>
            <input type="submit" value="Login" name="proseslog">
           <h5 style="text-align: center;"><a href="index.php">BERANDA</a></h5>
        </form>
    </div>

<?php
if(isset($_POST{'proseslog'})) {
    $sql = mysqli_query($koneksi, "select * from admin where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0) {
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='admin/beranda_admin.php'>";

    }else{
       
        echo  "<meta http-equiv=refresh content=1;URL='login.php'>";
    }
} 