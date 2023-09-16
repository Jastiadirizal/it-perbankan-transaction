<?php 
    error_reporting(0);
    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "bank3";

    $koneksi = mysqli_connect($hostname, $userDataBase, $passwordUser, $databaseName) 
    or die (mysqli_error());

    //if($koneksi){echo "BERHASIL KONEKSI<br>";
    //}else {echo "GAGAL KONEKSI<br>";}
?>