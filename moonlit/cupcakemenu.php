<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moonlit Bakery</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <nav>
      <div class="header">
        <div class="header-container">
        <h1>Cupcake</h1>
        <p>A Sweet Delight You Can Hold in Your Hand</p>
      </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
        </ul>
        <button class="cart-button" onclick="location.href='checkout.php'">Cart (<span
                id="cart-count">0</span>)</button>
    </nav>
</head>
<body>''
  <div class="main-content">
    <div class="main-content image">
      <div class="custom image"><img src="assets/cupCover.jpg"></div>
    </div>
    <h1> Variant</h2>
    <div class="products">
      <div class="product-mac">
        <img src="assets/cupChoco.jpeg" alt="Cupcake">
        <h2>Chocolate</h2>
        <p>Rp. 15.000</p>
        <form action="add_to_cart.php" method="POST">
  <input type="hidden" name="productid" value="1401">
        <button class="add-to-cart-button">Add to Cart</button>
        <input type="number" name="qty" value="1" />
      </div>
      <div class="product-mac">
        <img src="assets/cupOreo.jpeg" alt="Cupcake">
        <h2>Oreo</h2>
        <p>Rp. 15.000</p>
        <form action="add_to_cart.php" method="POST">
  <input type="hidden" name="productid" value="1402">
        <button class="add-to-cart-button">Add to Cart</button>
        <input type="number" name="qty" value="1" />
      </div>
      <div class="product-mac">
        <img src="assets/cupLemon.jpeg" alt="Cupcake">
        <h2>Lemon</h2>
        <p>Rp. 15.000</p>
        <form action="add_to_cart.php" method="POST">
  <input type="hidden" name="productid" value="1403">
        <button class="add-to-cart-button">Add to Cart</button>
        <input type="number" name="qty" value="1" />
      </div>
      <div class="product-mac">
        <img src="assets/cupStrawberry.jpeg" alt="Cupcake">
        <h2>Strawberry</h2>
        <p>Rp. 15.000</p>
        <form action="add_to_cart.php" method="POST">
  <input type="hidden" name="productid" value="1404">
        <button class="add-to-cart-button">Add to Cart</button>
        <input type="number" name="qty" value="1" />
      </div>
      <div class="product-mac">
        <img src="assets/cupVanStraw.jpeg" alt="Cupcake">
        <h2>Vanilla Strawberry</h2>
        <p>Rp. 15.000</p>
        <form action="add_to_cart.php" method="POST">
  <input type="hidden" name="productid" value="1405">
        <button class="add-to-cart-button">Add to Cart</button>
        <input type="number" name="qty" value="1" />
      </div>
      <div class="product-mac">
        <img src="assets/CupBirthday.jpeg" alt="Cupcake">
        <h2>Bitrthday</h2>
        <p>Rp. 15.000</p>
        <form action="add_to_cart.php" method="POST">
  <input type="hidden" name="productid" value="1406">
        <button class="add-to-cart-button">Add to Cart</button>
        <input type="number" name="qty" value="1" />
      </div>
    </div>
  </div>
<footer>
  <div class="social-links">
      <a href="#">
          <i class="fab fa-instagram"></i>
      </a>
      <a href="#">
          <i class="fab fa-snapchat-ghost"></i>
      </a>
      <a href="#">
          <i class="fab fa-twitter"></i>
      </a>
      <a href="#">
          <i class="fab fa-facebook-f"></i>
      </a>
  </div>
</div>
<br>
<ul class="footer-links">
  <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
    </ul>
  
    <div class="copyright">
        <p>&copy; 2024 Moonlit. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>