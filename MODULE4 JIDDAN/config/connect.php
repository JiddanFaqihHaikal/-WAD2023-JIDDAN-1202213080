<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost";
$username = "root";
$password = "";
$NamaDatabase = "modul4_wad";

$con = mysqli_connect($host, $username, $password, $NamaDatabase);
// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
$error = mysqli_connect_error(); 
if(! $con) { 
    print("Connection Failed: ". $error); 
} else{ 
    print("Connection Established Successfully"); 
}
// 
 
?>