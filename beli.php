<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .form-label {
            color: gold;
        }

        .card {
            background-color: rgb(14, 13, 13);
            border: 1px solid gold;
            border-radius: 1rem;
            box-shadow: 0 4px 30px rgba(168, 197, 6, 0.5);
        }

        .form-control {
            background-color: #2a2a2a;
            color: white;
            border: 1px solid #555;
        }

        .form-control:focus {
            border-color: gold;
            box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
        }

        .btn-warning {
            background-color: gold;
            color: black;
            font-weight: bold;
        }

        .btn-warning:hover {
            background-color: rgb(180, 168, 0);
        }

        .btn-secondary {
            background-color: #121212;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="card mx-auto p-4" style="max-width: 600px;">
            <div class="text-center mb-4">
                <h2 class="text-warning"><i class="bi bi-cart"></i> Beli Mobil</h2>
                <p class="text-white">Lengkapi formulir di bawah ini untuk membeli mobil impian Anda.</p>
            </div>

            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Mobil</label>
                    <input type="text" class="form-control" placeholder="Masukan nama mobil">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Anda</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kontak / WhatsApp</label>
                    <input type="text" class="form-control" placeholder="08xxxxxxxxxx">
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" rows="3" placeholder="Jl. Contoh No. 123, Jakarta"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning">Konfirmasi Pembelian</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>