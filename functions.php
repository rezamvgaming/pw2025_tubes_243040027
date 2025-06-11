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

    // Sanitasi input agar lebih aman dari XSS atau input berbahaya
    $Merek = htmlspecialchars($data["Merek"]);
    $type = htmlspecialchars($data["type"]);
    $warna = htmlspecialchars($data["warna"]);
    $mesin = htmlspecialchars($data["mesin"]);
    $desain = htmlspecialchars($data["desain"]);
    $harga = htmlspecialchars($data["harga"]);

    // Query insert data
    $query = "INSERT INTO car 
              (Merek, type, warna, mesin, desain, harga) 
              VALUES 
              ('$Merek', '$type', '$warna', '$mesin', '$desain', '$harga')";

    mysqli_query($conn, $query);

    // Kembalikan jumlah baris yang terpengaruh (untuk cek berhasil/gagal)
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM car WHERE id = $id");

    return mysqli_affected_rows($conn);
}
