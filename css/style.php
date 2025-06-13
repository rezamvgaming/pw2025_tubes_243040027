<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        scroll-behavior: smooth;
        font-family: "Poopins";
    }

    body {
        background-image: url(img/bg.jpeg);
        background-size: contain;
    }

    span {
        background: linear-gradient(to right, rgb(19, 18, 18), rgb(181, 201, 3));
        background-clip: text;
        color: transparent;
    }

    section {
        min-height: 100vh;
        padding: 5% 15%;
    }

    .navbar-custom {
        background-color: black !important;
        color: gold;
    }

    .navbar-custom .nav-link {
        color: white;
    }

    .navbar-custom .nav-link:hover {
        color: gold;
    }

    .navbar-custom span {
        font-size: 20px;
    }


    #home {
        background-image: url(img/bg3.jpeg);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2em;
    }

    #about {
        background-color: black;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5em;
    }

    .about-box {
        display: flex;
        flex-direction: column;
        text-align: center;
        margin: 100px;
    }

    .about-info img {
        padding-top: 100px;
        min-height: 100px;
        align-items: center;
    }

    .about-info h1 {
        color: rgb(0, 0, 0);
        text-align: center;
    }

    .about-box h1 {
        font-size: 5em;
    }

    .about-box p {
        color: white;
        font-size: 30px;
    }

    .about-box h2 {
        font-size: 2.5em;
    }

    #products {
        background-color: #000;
        padding: 60px 20px;
        color: linear-gradient(to right, rgb(0, 0, 0), rgb(181, 201, 3));
    }

    .luxury-title {
        font-family: "Poppins", sans-serif;
        font-size: 2.5rem;
        /* atau sesuai kebutuhan */
        font-weight: 700;
        background: linear-gradient(to right, rgb(0, 0, 0), rgb(181, 201, 3));
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }


    .product-card {
        background-color: rgb(17, 15, 15);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(168, 197, 6, 0.5);
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px yellow;

    }

    .product-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .product-card-body {
        padding: 30px;
    }

    .product-card-body h5 {
        font-size: 20px;
        color: rgb(181, 201, 3);
    }

    .product-card-body p {
        font-size: 14px;
        color: #bbb;
    }

    .product-card-body .price {
        color: #fff;
        font-size: 18px;
        font-weight: bold;
    }

    .container {
        text-align: center;
    }

    .custom-button {
        background-color: rgb(150, 163, 31);
        color: black;
        border: none;
        padding: 10px 30px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .custom-button:hover {
        background-color: rgb(27, 26, 26);
        transform: scale(1.05);
        color: gold;
    }

    .custom-button:active {
        transform: scale(0.95);
    }

    .custom-button2 {
        background-color: rgb(107, 110, 107);
        color: white;
        border: none;
        padding: 15px 50px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .custom-button2:hover {
        background-color: #828680;
        transform: scale(1.05);
    }

    .custom-button:active {
        transform: scale(0.95);
    }

    #contact {
        background-color: black;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 2em;
    }

    form .input-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1em;
    }

    .info-box span {
        font-size: 1.5em;
    }

    form input {
        font-size: 1.3em;
        padding: 1em 5em;
        border-color: rgb(12, 11, 11, 0.4);
        border-radius: 0.5em;
        outline: none;
    }

    form input:focus {
        background: rgb(229, 229, 229);
    }

    footer {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10em;
        bottom: 0;
        background-image: url(img/bgr.jpeg);
        background-size: 100%;
        width: 100%;
        padding: 5em 15%;
    }

    .col-left {
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .col-box {
        display: flex;
        align-items: center;
        gap: 1em;
    }

    .col-box i {
        font-size: 2.5em;
    }

    .col-box span {
        font-size: 1em;
        margin: 10px;
    }

    .col-right {
        display: flex;
        flex-direction: column;
        gap: 1em;
        color: white;
        max-width: 500px;
    }

    .col-right span {
        font-size: 1.3em;
    }

    .col-right .social-icons {
        display: flex;
        align-items: center;
        justify-content: left;
        gap: 3em;
    }

    .col-right .social-icons i {
        color: rgba(44, 23, 94, 0.84);
        font-size: 2em;
        transition: 0.2s ease-in-out;
        cursor: pointer;
    }


    .social-icons i:hover {
        color: gold;
    }

    .custom-button {
        background-color: gold;
        color: black;
        border: none;
        padding: 10px 30px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: .3s ease, transform 0.2s ease;
    }
</style>