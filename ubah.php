<?php
require 'functions.php';

$id = $_GET['id'];
$car = query("SELECT * FROM car WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    $merek = htmlspecialchars($_POST['merek']);
    $type = htmlspecialchars($_POST['type']);
    $warna = htmlspecialchars($_POST['warna']);
    $mesin = htmlspecialchars($_POST['mesin']);
    $desain = htmlspecialchars($_POST['desain']);
    $harga = htmlspecialchars($_POST['harga']);

    $query = "UPDATE car SET
                Merek = '$merek',
                type = '$type',
                warna = '$warna',
                mesin = '$mesin',
                desain = '$desain',
                harga = '$harga'
              WHERE id = $id";

    $result = mysqli_query(koneksi(), $query);
    if ($result) {
        echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        die("Query Error: " . mysqli_error(koneksi()));
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    body {
        background-color: black !important;
        color: white;
        font-family: 'Poppins', sans-serif;
    }


    h1 {
        color: gold;
        font-weight: bold;
    }

    .form-label {
        color: gold;
        font-weight: 500;
    }

    .form-control {
        background-color: rgb(7, 7, 7);
        color: white;
        border: 1px solid #555;
    }

    .form-control:focus {
        border-color: gold;
        box-shadow: 0 1px 40px rgb(192, 163, 1);
    }

    .btn-warning {
        background-color: gold;
        color: black;
        font-weight: bold;
    }

    .btn-warning:hover {
        background-color: rgb(180, 168, 0);
    }

    .btn-light {
        background-color: rgb(29, 27, 27);
        color: white;
        border: 1px solid #666;
    }

    .btn-light:hover {
        background-color: #3a3a3a;
        color: gold;
    }

    form {
        background-color: #1c1c1c;
        border: 1px solid black;
        box-shadow: 0 4px 20px rgba(255, 215, 0, 0.2);
        padding: 30px;
        border-radius: 1rem;
    }

    label {
        font-weight: 500;
        color: gold;
    }
</style>


<body class="text-white">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Ubah Data Mobil</h1>

        <form action="" method="post" class="bg-secondary p-4 rounded">
            <div class="mb-3">
                <label>Merek</label>
                <input type="text" name="merek" class="form-control" value="<?= $car['Merek']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Type</label>
                <input type="text" name="type" class="form-control" value="<?= $car['type']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Warna</label>
                <input type="text" name="warna" class="form-control" value="<?= $car['warna']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Mesin</label>
                <input type="text" name="mesin" class="form-control" value="<?= $car['mesin']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Desain</label>
                <input type="text" name="desain" class="form-control" value="<?= $car['desain']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $car['harga']; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-warning">Ubah Data</button>
            <a href="admin.php" class="btn btn-light ms-2">Batal</a>
        </form>
    </div>
</body>

</html>