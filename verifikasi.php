<?php


include('config.php');

session_start();

$id = $_GET['id'];

$selectQuery = "SELECT * FROM mahasiswa WHERE id='$id'";
$getUser = mysqli_query($conn, $selectQuery);
$rowUser = mysqli_fetch_assoc($getUser);
if($rowUser['status'] == 'Verifikasi') {
    $query = "UPDATE mahasiswa SET status='Belum di Verifikasi' WHERE id='$id'";
} else {
    $query = "UPDATE mahasiswa SET status='Verifikasi' WHERE id='$id'";
}

$sql = mysqli_query($conn, $query);

if($sql) {
    $_SESSION['result'] = 'Berhasil Mengubah Status';
    header('location:tabel_pendaftaran.php');
}

?>