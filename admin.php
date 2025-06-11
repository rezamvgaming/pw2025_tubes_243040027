<?php
require 'functions.php';
$car = query("SELECT * FROM car");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>halaman admin</title>
</head>

<body>

    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Luxury Car</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="info-box">
        <h1><span>Welcome Admin</span></h1>
    </div>


    <h1>Daftar Mobil</h1>

    <a href="tambah.php">Tambah Mobil</a>

    <table class="table table-hover">

        <tr>
            <th>No</th>
            <th>Merek</th>
            <th>Type</th>
            <th>Warna</th>
            <th>Mesin</th>
            <th>Desain</th>
            <th>harga</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($car as $row): ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $row['Merek']; ?></td>
                <td><?= $row['type']; ?></td>
                <td><?= $row['warna']; ?></td>
                <td><?= $row['mesin']; ?></td>
                <td><?= $row['desain']; ?></td>
                <td><?= $row['harga']; ?></td>

                <td>
                    <a href="" class="btn btn-warning"><i class="bi bi-eye"></i></a>
                    <a href="hapus.php?id=<?= $row['id']; ?>"
                        onclick="return confirm('Apakah anda yakin?');"
                        class="btn btn-danger">
                        <i class="bi bi-trash"></i>
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>