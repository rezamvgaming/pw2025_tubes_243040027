<?php
require 'functions.php';
$car = query("SELECT * FROM car");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>halaman admin</title>
</head>

<body>

    <h1>Daftar Mobil</h1>

    <table border="1" cellpadding="10" cellspacing="0">

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
                <td><?= $row['id']; ?></td>
                <td><?= $row['Merek']; ?></td>
                <td><?= $row['type']; ?></td>
                <td><?= $row['warna']; ?></td>
                <td><?= $row['mesin']; ?></td>
                <td><?= $row['desain']; ?></td>
                <td><?= $row['harga']; ?></td>

                <td>
                    <a href="" class="btn btn-warning"><i class="bi bi-eye"></i></a> <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>