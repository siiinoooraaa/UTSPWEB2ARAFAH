<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
  header('location:datapegawai.php');
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
    <title>Edit</title>
</head>
<body>
    <h3>Edit Data</h3>
    <br><br>
    <?php
        include 'database.php';
        $id = $_GET['id'];
        $data = mysqli_query($db,"select * from data_pegawai where id='$id'");
        while($d = mysqli_fetch_array($data)) {
    ?>
    <form method="post" action="update.php">
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ;?>">
                    <input type="text" name="nama" value="<?php echo $d['nama'] ;?>">
                </td>
            </tr>
            <tr>
                <td>jabatan</td>
                <td><input type="text" name="jabatan" value="<?php echo $d['jabatan'] ;?>"></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Pendapatan</td>
                <td><input type="text" name="pendapatan" value="<?php echo $d['pendapatan'] ;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
            <?php
        }
        ?>
</body>
</html>