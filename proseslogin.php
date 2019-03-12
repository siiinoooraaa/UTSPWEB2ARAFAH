<?php
   session_start();
   require_once("database.php");
   $username = $_POST['username'];
   $password = md5($_POST['password']);   
   $sql = "SELECT * FROM data_user WHERE username = '$username'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center'>Username Belum Terdaftar <a href='login.php'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password salah<a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
            header("location:home.php");
       
        }
      }
  ?>