<?php
require "css/style.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>halaman admin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container-fluid">
            <span class="navbar-link">LuxuryCars</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Motto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home">
        <div class="info-box">
            <h2><span class="ai">Welcome to Luxury Cars</span></h2>
        </div>
    </section>

    <section id="about">

        <div class="about-box">

            <div class="about-info">

                <p><span>Luxury Is Not a Choice, it's a Lifestyle</span></p>
            </div>
    </section>

    <section id="products">
        <div class="container">
            <h2 class="text-center mb-5 luxury-title">Our Luxury Cars</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/porche911.jpeg">
                        <div class="product-card-body">
                            <h5>Porche911 GT3RS</h5>
                            <p>Elegan, powerful, dan dilengkapi fitur terbaik di kelasnya.</p>
                            <div class="price">7,9M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/m4.png">
                        <div class="product-card-body">
                            <h5>BMW M4 Competition</h5>
                            <p>Desain futuristik dan kenyamanan luar biasa, di tambah look yang sporty.</p>
                            <div class="price">3,1M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/svj.png">
                        <div class="product-card-body">
                            <h5>Lambhorghini Aventador SVJ</h5>
                            <p>Teknologi canggih dan kemewahan tanpa kompromi.</p>
                            <div class="price">22M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center mb-5">.</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/huracan.png">
                        <div class="product-card-body">
                            <h5>Lambhorghini Huracan</h5>
                            <p>Lamborghini Huracán – Saat kecepatan bertemu kemewahan.</p>
                            <div class="price">8,9M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/chiron.png">
                        <div class="product-card-body">
                            <h5>Bugatti Chiron</h5>
                            <p>1.500 HP, 0–100 km/h dalam hitungan detik. Ini bukan mobil, ini monster</p>
                            <div class="price">4,8M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/senna.png">
                        <div class="product-card-body">
                            <h5>Mclaren Senna</h5>
                            <p>Ketepatan F1, desain futuristik. Senna adalah kecepatan yang cerdas.</p>
                            <div class="price">14M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center mb-5">.</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/sf90.png">
                        <div class="product-card-body">
                            <h5>Ferarri SF90</h5>
                            <p>Supercar Plug-in Hybrid Pertama dari Ferrari.”
                                Inovatif, mewah, dan memukau dalam setiap detail.</p>
                            <div class="price">17M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/r8.png">
                        <div class="product-card-body">
                            <h5>Audi R8</h5>
                            <p>“Desain Futuristik, Jiwa Sportscar.”
                                Rasakan sensasi mengemudi Audi R8 — mewah, cepat, berkelas.</p>
                            <div class="price">9M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/senna.png">
                        <div class="product-card-body">
                            <h5>Bugatti Jesko</h5>
                            <p>“Hypercar Langka, Performa Luar Biasa.”
                                Miliki Jesko, simbol kekuatan dan eksklusivitas.</p>
                            <div class="price">40M</div>
                            <div class="container">
                                <a href="beli.php" class="btn btn-warning">
                                    <i class="bi bi-cart"></i> Beli Mobil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">

        <h1 class="header"><span>Contact</span></h1>

        <form action="#">
            <div class="input-box">
                <span>Full Name</span>
                <input type="text" placeholder="Enter Your Full Name">
            </div>

            <div class="input-box">
                <span>Your Email</span>
                <input type="text" placeholder="Enter Your Email">
            </div>

            <div class="input-box">
                <span>Your Massage</span>
                <input type="text" placeholder="Enter Your Massage">
            </div>

            <button class="custom-button" type="submit">Submit</button>

        </form>
    </section>

    <footer>
        <div class="col-left">
            <div class="col-box">
                <span><i class='bx bxs-location-plus'></i></span>
                <span>Banjar,Jalan Cimenyan 1</span>
            </div>

            <div class="col-box">
                <span><i class='bx bxs-phone'></i></span>
                <span>089630477771- Zaa</span>
            </div>

            <div class="col-box">
                <span><i class='bx bxs-envelope'></i></span>
                <span>Luxury@gmail.com</span>
            </div>
        </div>

        <div class="col-right">
            <span>My Shop</span>
            <span>Luxury Is Not a Choice, it's a Lifestyle</span>
            <span> Beli Mobil Impian Kamu Disini!!</span>
            <span> Dijamin Masalah Asuransi Aman </span>
            <span> Bisa kredit</span>
            <span> Walaupun Muka Anda
                Kurang Ganteng Tetapi Jika
                Anda Memakai Mobil Mobil Ini
                Anda Akan Menjadi Sangat Ganteng
            </span>

            <div class="social-icons">

                <span>
                    <a href="https://instagram.com/rzafzzn">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                </span>
                <span>
                    <a href="https://whatsapp.com">
                        <i class='bx bxl-whatsapp'></i>
                    </a>
                </span>
            </div>
        </div>
    </footer>
</body>

</html>