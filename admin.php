<?php
require 'functions.php';

if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    $car = query("SELECT * FROM car WHERE 
        Merek LIKE '%$keyword%' OR
        type LIKE '%$keyword%' OR
        warna LIKE '%$keyword%' OR
        mesin LIKE '%$keyword%' OR
        desain LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' ");
} else {
    $car = query("SELECT * FROM car");
}

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

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: black;
        font-family: 'Poppins', sans-serif;
        color: #f1f1f1;
        min-height: 100vh;
    }

    .navbar {
        background-color: #000 !important;
        box-shadow: 0 2px 10px rgba(226, 194, 10, 0.1);
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
        color: gold !important;
    }

    .nav-link {
        color: #ccc !important;
        transition: 0.3s;
    }

    .nav-link:hover {
        color: gold !important;
    }

    .info-box {
        background-image: url(img/bgadm2.jpeg);
        background-size: 1500px 250px;
        padding: 60px 20px;
        text-align: center;
        border-bottom: 1px solid gold;
    }

    .info-box h1 {
        font-size: 3rem;
        color: gold;
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        margin: 30px auto;
        color: #ffffff;
    }


    a[href="tambah.php"] {
        display: block;
        text-align: center;
        background: gold;
        color: #000;
        width: 200px;
        margin: 0 auto 30px auto;
        padding: 12px 25px;
        font-weight: 600;
        border-radius: 30px;
        text-decoration: none;
        transition: 0.3s;
    }

    a[href="tambah.php"]:hover {
        background: rgb(167, 135, 31);
    }

    .table {
        width: 90%;
        margin: 0 auto 60px auto;
        border-collapse: collapse;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(255, 215, 0, 0.1);
    }

    .table th {
        background-color: black;
        color: gold;
        font-weight: bold;
        text-align: center;
        padding: 10px;
    }

    .table td {
        background-color: rgb(8, 8, 8);
        color: #eee;
        padding: 12px;
        text-align: center;
        border: 1px solid #444;
    }

    .btn {
        border-radius: 30px;
        padding: 8px 12px;
        font-size: 14px;
    }

    .btn-warning {
        background-color: gold;
        color: #000;
        border: none;
        transition: 0.3s;
    }

    .btn-warning:hover {
        background-color: #d4af37;
        color: #000;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
        border: none;
        transition: 0.3s;
    }

    .btn-danger:hover {
        background-color: #bb2d3b;
    }
</style>

<body>

    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LuxuryCar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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

    <div class="container mb-4">
        <form action="" method="post" class="d-flex justify-content-center">
            <input type="text" name="keyword" class="form-control w-50 me-2" placeholder="Cari mobil..." autocomplete="off" autofocus>
            <button type="submit" name="cari" class="btn btn-outline-warning">Cari</button>
        </form>
    </div>


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
                    <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
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