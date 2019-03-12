<?php
session_start();


   require_once("database.php");
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $email = $_POST['email'];
   // $pass_md5=md5($pass);

   $sql = "SELECT * FROM data_user WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='registrasi.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='registrasi.php'>Back</a>";
     }else if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
{ 
//bila captcha yang dimasukkan salah
echo"<div align='center'>kode captcha yang dimasukkan salah!!! <a href='registrasi.php'>Back</a></div>";
}

      else {
       $data = "INSERT INTO data_user VALUES (NULL, '$username', '$password', '$email')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>

<!-- <?php
//periksa code captcha yang dimasukkan
// session_start();
// if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
// { 
// //bila captcha yang dimasukkan salah
// echo"Kode salah... <a href='index.php'>Kembali</a>";
// }
// else{
// //bila captcha yang dimasukkan benar  
// //tulis script eksekusi lainnya di sini//
// echo"Kode BENAR";
// $nama   = $_POST['nama'] ;
// $alamat   = $_POST['alamat'] ;
// $email    = $_POST['email'] ;
// echo"<br/>nama : $nama
//      <br/>alamat: $alamat
//    <br/>email : $email";
//akhir script

?> -->