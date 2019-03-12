<?php
    include 'database.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $pendapatan = $_POST['pendapatan'];
 
    mysqli_query($db,"update data_pegawai set nama='$nama',jabatan='$jabatan',pendapatan='$pendapatan' where id='$id'");

    header("location:datapegawai.php");
?>