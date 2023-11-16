<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $nama_db = "modul3_wad";

    $koneksi = mysqli_connect($servername,$username,$password,$nama_db);
// 

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    if ($koneksi->connect_error){
        die("Koneksi Gagal: " .$koneksi->connect_error);
    }
// 
?>