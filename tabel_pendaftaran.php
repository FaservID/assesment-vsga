<?php

include('config.php')
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
            <!-- <a href="cari_mahasiswa.php">Cek Status</a> -->
            <a href="tabel_pendaftaran.php">Tabel Pendaftaran</a>

        </div>
    </nav>

    <div class="container">
        <div class="card mt-5">
            <h4 class="text-center mt-4">Daftar Mahasiwa</h4>
            <div class="card-body">
                <?php
                if (isset($_SESSION['result'])) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_SESSION['result']; ?>
                        <?php unset($_SESSION['result']); ?>
                    </div>
                <?php
                }
                ?>
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor Handphone</th>
                            <th>Semester</th>
                            <th>IPK</th>
                            <th>Beasiswa</th>
                            <th>Status</th>
                            <th>Berkas</th>
                            <th>Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conn, 'SELECT * FROM mahasiswa');
                        $i = 1;
                        $status = '';
                        
                        // $count = mysqli_num_rows($query);
                        while ($user = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $user['name'] . "</td>";
                            echo "<td>" . $user['email'] . "</td>";
                            echo "<td>" . $user['phone_number'] . " </td>";
                            echo "<td>" . $user['semester'] . " </td>";
                            echo "<td>" . $user['ipk'] . " </td>";
                            echo "<td>" . $user['beasiswa'] . " </td>";
                            echo "<td>". $user['status'] . "</td>";
                            echo "<td>" . "<a href='assets/file/$user[berkas]' class='btn btn-sm btn-primary'>Berkas</a>" . "</td>";
                            if($user['status'] == "Verifikasi") {
                                echo "<td>" . "<a href='verifikasi.php?id=$user[id]' class='btn btn-danger btn-sm'>Batalkan</a>"  . "</td>";
                            } else {
                                echo "<td>" . "<a href='verifikasi.php?id=$user[id]' class='btn btn-primary btn-sm'>Verifikasi</a>"  . "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>