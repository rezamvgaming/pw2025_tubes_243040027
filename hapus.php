<?php

require 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
            <script>
                alert('Berhasil dihapus!');
                document.location.href = 'admin.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Gagal dihapus
                document.location.href = 'admin.php';
            </script>
        ";
}
