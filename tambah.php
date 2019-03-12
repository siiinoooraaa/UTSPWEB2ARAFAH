<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
  header('location:login.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>
<body>
    <div class="con">
    <div class="kol1">
    <h3>Tambah Data</h3> 
    <br><br>
    <form action="tambahaksi.php" method='post'>
        <table align="center">
            <tr>
                <td><input type="text" name="nama" placeholder="Nama"></td>
            </tr>
            <tr>
                <td><input type="text" name="jabatan" placeholder="Jabatan"></td>
            </tr>
            <tr>
                <td><input type="text" name="pendapatan" placeholder="Pendapatan"></td>
            </tr>

                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</body>
</html>