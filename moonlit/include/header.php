<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moonlit Bakery</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <nav>
     <div class="header-container">
        <div class="logo"><img src="assets/LOGO.png" alt="Moonlit Bakery Logo"></div>
     </div>
        <ul class="header-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="daftar.php">Daftar</a></li>
        </ul>
        <button class="cart-button" onclick="location.href='/utspakhuma/checkout.php'">Cart (<span
                id="cart-count">0</span>)</button>
    </nav>
</head>
</html>