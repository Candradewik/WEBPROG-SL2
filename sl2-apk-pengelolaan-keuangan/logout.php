<?php
    session_start();
    session_destroy(); //untuk menyelesaikan atau menghapus semua session
    // echo "Logout Berhasil!";
    header('Location: /sl2-apk-pengelolaan-keuangan/welcome.php');
?>