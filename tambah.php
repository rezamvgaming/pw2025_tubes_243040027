<?php

require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal!');
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
    <title>Document</title>
</head>

<body>

    <h1>Tambah Data Mobil!</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="Merek">Merek </label>
                <input type="text" name="Merek" required>
            </li>
            <li>
                <label for="type">Type </label>
                <input type="text" name="type" required>
            </li>
            <li>
                <label for="warna">Warna </label>
                <input type="text" name="warna" required>
            </li>
            <li>
                <label for="mesin">Mesin </label>
                <input type="text" name="mesin" required>
            </li>
            <li>
                <label for="desain">Desain </label>
                <input type="text" name="desain" required>
            </li>
            <li>
                <label for="harga">Harga </label>
                <input type="text" name="harga" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>

</html>