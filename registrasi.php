<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:login.php'); }
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00b101;}
</style>
<form action="prosesregistrasi.php" method="post">
  
</head>
<body  style="background-color: lightblue " style="color: blue">  

<?php
// define variables and set to empty values
$usernameErr = $emailErr = $passwordErr = "";
$username = $password = $email = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $pass = test_input($_POST["password"]);
  }
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2><u> Registration Form <u> </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td>Username</td>
   <td>:<input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $usernameErr;?></span></td>
  </tr>
  <tr>
   <td>Password</td>
   <td>:<input type="password" name="password">
   <span class="error">* <?php echo $passwordErr;?> </span>
  </tr>
  <tr>
   <td>E-mail</td>
   <td>:<input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
  <tr><td><img src="captcha.php"/> </td><td>: <input type="text" placeholder="masukan kode captcha" name="kode"/><span class="error">*</span></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset">
   </td>
  </tr>
</table>




</form>

<!-- <?php
 // echo "<h2>Your Input:</h2>";
 // echo "Nama : ";
 // echo $name;
 // echo "<br>";
 // echo "Nim : ";
 // echo $nim;
 // echo "<br>";
 // echo "E-mail : ";
 // echo $email;
 // echo "<br>";
 // echo "jurusan : ";
 // echo $jurusan;
 // echo "<br>";
 // echo "Gender : ";
 // echo $gender;
 // echo "<br>";
 // echo "Usia : ";
 // echo $usia;
 // echo "<br>";
 // echo "Website : ";
 // echo $website;
 // echo "<br>";
 // echo "Biografi : ";
 // echo $biografi;
 // echo "<br>";
 // echo $tgl = date("d/m/Y h:i:sa");
 // echo "<br>";
?>  -->



</body>
</html>