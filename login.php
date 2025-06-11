<?php
require "css/login.php";
?>

<?php

if (isset($_POST["submit"])) {

    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {

        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <h1>Login Admin</h1>

        <?php if (isset($error)) : ?>
            <p style="color: red; font-style:inherit"> Usename atau Password salah!</p>
        <?php endif; ?>

        <form action="" method="post" class="login-form">

            <label for="username">Username :</label>
            <input type="text" name="username" id="username" placeholder="Masukann username">


            <label for="password">Password :</label>
            <input type="password" name="password" id="password" placeholder="Masukan Password">

            <button type="submit" name="submit">Login</button>

        </form>
    </div>

</body>

</html>