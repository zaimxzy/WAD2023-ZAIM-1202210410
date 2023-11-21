<?php 

// (1) Hapus cookie dengan key id 
session_start();
// 

// (2) Mulai session
session_unset();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
setcookie('id', '', time() - 3600, "/WAD2023-ZAIM-1202210410/MODUL4%20ZAIM/views");
//

// (4) Lakukan redirect ke halaman login awal
header('Location: ../views/login.php');
//

exit;

?>
