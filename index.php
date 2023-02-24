<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar">
        <div class="link">
            <a href="index.php">Beasiswa</a>
            <a href="pendaftaran.php">Pendaftaran</a>
            <a href="hasil.php">Hasil</a>
            <a href="tabel_pendaftaran.php">Tabel Pendaftaran</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="card">
            <img src="assets/image/bg5.jpg" alt="Cover" height="600px">
            <div class="text-cover" style="position: absolute; top:70vh; left:32%; text-align:center; ">
                <div class="display-6 text-white font-weight-bold" style="font-weight: bolder">
                    Beasiswa Dibuka Kembali!
                </div>
                <p class="text-white">Ayo segera Daftarkan Segera!</p>
                <a href="pendaftaran.php" class="btn btn-danger" style="margin-left:-10px;">Daftar Sekarang</a>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="box">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/image/content2.jpg" class="img img-responsive" style="border-radius: 5px" width="100%">
                            <hr>
                            <h5 style="font-weight:lighter" class="text-center">Beasiswa Non Akademik</h5>
                            <p class="text-muted text-center">Beasiswa Non Akademik bantuan biaya pendidikan yang diberikan dan ditujukan bagi mahasiswa yang sedang menjalani masa studi kuliah program diploma dan sarjana</p>
                            <p style="font-size:10px" class="text-center"><span class="text-danger ">*)</span> IPK harus diatas 3.0</p>
                            <a href="pendaftaran.php" class="btn btn-danger" style="width: 100%;">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img src="assets/image/content3.jpg" class="img img-responsive" width="100%" style="border-radius: 5px">
                            <hr>
                            <h5 style="font-weight:lighter" class="text-center">Beasiswa Akademik</h5>
                            <p class="text-muted text-center">Beasiswa Peningkatan Prestasi Akademik (PPA) adalah bantuan biaya pendidikan yang diberikan dan ditujukan bagi mahasiswa yang sedang menjalani masa studi kuliah program diploma dan sarjana</p>
                            <p style="font-size:10px" class="text-center"><span class="text-danger">*)</span> IPK harus diatas 3.0</p>
                            <a href="pendaftaran.php" class="btn btn-danger" style="width: 100%;">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>