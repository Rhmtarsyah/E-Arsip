<?php
session_start();
//menghapus session yang sudah di set
unset($_SESSION['id_user']);
unset($_SESSION['username']);

session_destroy();
echo"<script>alert('Anda telah keluar dari Halaman Administraror'); document.location='index.php'</script>";
?>