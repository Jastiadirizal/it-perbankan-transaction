<?php
include "config.php";
// Dapatkan saldo berdasarkan ID akun yang diberikan
$id_akun = $_POST['id_akun'];
$query = "SELECT saldo FROM accounts WHERE id_akun = $id_akun";
$result = $koneksi->query($query);

if(isset($_POST ))  {
    $key = isset($_POST ['key'])? $_POST['key']: '';
    $akun1 = $_POST ['akun1'];
    $akun2 = $_POST ['akun2'];
    $jumlah = $_POST ['jumlah_transaksi'];
    if ($key != md5 ('121212')) {
        die ('key salah');
    }
    }
    if ($akun1 != '' && $akun2 != '' && $jumlah != '') {
        //saldo akun1 dikurangi $jumlah 
        //saldo akun2 ditambah $jumlah
        echo "Transfer dari $akun1 ke $akun2 sejumlah $jumlah berhasil" ;
   
    }
else {
    echo "ID akun tidak valid";
} 
// Tutup koneksi basis data
$koneksi->close();
?>
