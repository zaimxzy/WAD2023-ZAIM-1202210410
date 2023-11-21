<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3308";
$username = "root";
$password = "";
$database = "modul4_wad";

$conn = mysqli_connect($host,$username,$password,$database);
//

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($conn -> connect_error) {
    die("Koneksi Gagal" . $conn -> connect_error);
}
// 
 
?>