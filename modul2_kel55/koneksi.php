<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "modul2_kel55";
$connect = mysqli_connect($server, $user, $password, $db_name);

if(!$connect){
    die("Gagal terhubung dengan database. " . mysqli_connect_error());
}

?>