<?php
function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2025_tubes_243040027');
    return $conn;
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data)
{

    $conn = koneksi();

    $Merek = htmlspecialchars($data["Merek"]);
    $type = htmlspecialchars($data["type"]);
    $warna = htmlspecialchars($data["warna"]);
    $mesin = htmlspecialchars($data["mesin"]);
    $desain = htmlspecialchars($data["desain"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO car 
              (Merek, type, warna, mesin, desain, harga) 
              VALUES 
              ('$Merek', '$type', '$warna', '$mesin', '$desain', '$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

    $namaFile = $_FILES['gambar']['name'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    $error = $_FILES['gambar']['error'];

    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiFile = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if (!in_array($ekstensiFile, $ekstensiValid)) {
        echo "<script>alert('File harus berformat JPG, JPEG, atau PNG!');</script>";
        return false;
    }

    $namaBaru = uniqid() . '.' . $ekstensiFile;
    move_uploaded_file($tmpName, 'img/' . $namaBaru);

    $query = "INSERT INTO car 
                (Merek, type, warna, mesin, desain, harga, gambar) 
              VALUES 
                ('$merek', '$type', '$warna', '$mesin', '$desain', '$harga', '$namaBaru')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM car WHERE id = $id");

    return mysqli_affected_rows($conn);
}
