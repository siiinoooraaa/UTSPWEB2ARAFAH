<?php
    include 'database.php';

    $id = $_GET['id'];

    mysqli_query($db,"delete from data_pegawai where id='$id'");

    header("location:datapegawai.php");
?>