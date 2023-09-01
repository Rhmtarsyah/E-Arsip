<?php

//Koneksi database
//persiapan identitas server
$server = "localhost"; // nama server
$user = "root"; //username database server
$pass = ""; // password database
$database = "dbarsip";//Nama database

//koneksi database
$koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));


?>