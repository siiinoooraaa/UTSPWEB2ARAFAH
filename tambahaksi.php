<?php
    include 'database.php';

    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $pendapatan = $_POST['pendapatan'];
 
  
    $sql = "INSERT INTO data_pegawai VALUES('','$nama','$jabatan','$pendapatan')";
mysqli_query($db,$sql);

    header("location:datapegawai.php");
?>