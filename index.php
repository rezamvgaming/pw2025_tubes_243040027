<?php
require "css/style.php";
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

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">LuxuryCars</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
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
                            <h5>Porche911</h5>
                            <p>Elegan, powerful, dan dilengkapi fitur terbaik di kelasnya.</p>
                            <div class="price">7,9M</div>
                            <div class="container">
                                <button class="custom-button">Beli</button>
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
                                <button class="custom-button">Beli</button>
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
                                <button class="custom-button">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center mb-5">Our Luxury Cars</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/huracan.png">
                        <div class="product-card-body">
                            <h5>Lambhorghini Huracan</h5>
                            <p>Elegan, powerful, dan dilengkapi fitur terbaik di kelasnya.</p>
                            <div class="price">8,9M</div>
                            <div class="container">
                                <button class="custom-button">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/chiron.png">
                        <div class="product-card-body">
                            <h5>Bugatti Chiron</h5>
                            <p>Desain futuristik dan kenyamanan luar biasa.</p>
                            <div class="price">4,8M</div>
                            <div class="container">
                                <button class="custom-button">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="img/car/senna.png">
                        <div class="product-card-body">
                            <h5>Mclaren Senna</h5>
                            <p>Teknologi canggih dan kemewahan tanpa kompromi.</p>
                            <div class="price">14M</div>
                            <div class="container">
                                <button class="custom-button">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center mb-5">Our Luxury Cars</h2>
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
                                <button class="custom-button">Beli</button>
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
                                <button class="custom-button">Beli</button>
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
                                <button class="custom-button">Beli</button>
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
                <span>089630477771- Ubay</span>
            </div>

            <div class="col-box">
                <span><i class='bx bxs-envelope'></i></span>
                <span>Nekooo-cell@gmail.com</span>
            </div>
        </div>

        <div class="col-right">
            <span>My Shop</span>
            <p> BELANJA HANDPHONE TANPA RIBET!</p>
            <p> Bisa cicilan</p>
            <p> Bisa COD</p>
            <p> Bisa kredit</p>
            <p> Semua jadi lebih mudah!
                Promo spesial untuk pembelian online dan offline.
                Pilihan terbaik? Ya di Neko cell!</p>

            <div class="social-icons">

                <span>
                    <a href="https://instagram.com/nekooo_cell">
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