<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil menambahkan data!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal menambahkan data!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <title>Tambah Data Mobil</title>

</head>

<style>
    body {
        background-image: url(img/bgdt1.jpeg);
        background-size: 750px;

    }

    .card {
        border-radius: 5px;
        box-shadow: 0 1px 40px rgb(192, 163, 1);
    }

    .card-header {
        border-bottom: 1px solid gold;
    }

    .card-body {
        background-color: black;
    }

    .form-control {
        background-color: #2a2a2a;
        border: 1px solid #555;
        color: #fff;
    }

    .form-control:focus {
        background-color: gold;
        border-color: gold;
        box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
        color: black;
    }

    .btn-warning {
        background-color: gold;
        color: #000;
        border-radius: 30px;
        transition: 0.3s;
    }

    .btn-warning:hover {
        background-color: #d4af37;
    }
</style>

<body>

    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px; background-color: #1e1e1e; color: white; border: 1px solid gold;">
            <div class="card-header text-center" style="background-color: #111; color: gold;">
                <h3><i class="bi bi-plus-circle"></i> Tambah Data Mobil</h3>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="Merek" class="form-label">Merek</label>
                        <input type="text" class="form-control" name="Merek" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" required>
                    </div>
                    <div class="mb-3">
                        <label for="warna" class="form-label">Warna</label>
                        <input type="text" class="form-control" name="warna" required>
                    </div>
                    <div class="mb-3">
                        <label for="mesin" class="form-label">Mesin</label>
                        <input type="text" class="form-control" name="mesin" required>
                    </div>
                    <div class="mb-3">
                        <label for="desain" class="form-label">Desain</label>
                        <input type="text" class="form-control" name="desain" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-warning w-50 fw-bold">
                            <i class="bi bi-plus-lg"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>