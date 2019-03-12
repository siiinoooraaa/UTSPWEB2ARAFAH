<?php
   session_start();
   if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
 } else {
    $username = $_SESSION['username'];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sistem Arafah</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li ><a href="datapegawai.php">Data Pegawai</a></li>
            <li ><a href="tambah.php">Tambah data</a></li>
            <li ><a href="logout.php">Logout</a></li>
          </ul>
        </div></div></div>
        <div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Tabel Data</h1>
           <div class="kol2">
            <a name="tabel" class="tabela">
                <h3>Data Pegawai</h3>
                <a href="tambah.php"><input type="button" value="Tambah"></a>
                <br>
                <table align="center" rules="all" border="1">
                    <tr> 
                        <th><center>No</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Jabatan</center></th> 
                        <th><center>Pendapatan</center></th>     
                        <th><center>Aksi</center></th>
                    </tr>
                    <?php
                        include "database.php";
                        $no = 1;
                        $data = mysqli_query($db,"select * from data_pegawai");
                        while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['jabatan']; ?></td>
                         <td><?php echo $d['pendapatan']; ?></td>

  
                        <td><a href="edit.php?id=<?php echo $d['id']; ?>"><input type="button" value="Edit" title="Edit"></a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>"  onclick="javascript: return confirm('Anda yakin hapus ?')"><input type="button" value="Delete" title="Hapus"  class="del"></a> </td>

                    </tr>
                    <?php
                }
                ?>
                </table>
            </a>
            </div>
            </div>

         

          <div class="table-responsive">
          
          </div>
        </div>
      </div>
    </div>
                    <?php
                ?>
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
