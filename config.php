<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_ujian';


$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(!$conn) {
    echo "koneksi gagal" + mysqli_connect_error();
}
?>