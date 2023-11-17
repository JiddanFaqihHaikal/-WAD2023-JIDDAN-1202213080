<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3306"; 
$username = "root"; 
$password = ""; 
$NamaDatabase = "modul3_wad"; 

$con = mysqli_connect($host, $username, $password, $NamaDatabase);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$con) {
    die ("Failed to connect...");
}
// 
?>