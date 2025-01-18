<!DOCTYPE html>
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
        <h1>Croissant</h1>
        <p>Crispy on the Outside, Soft on the Inside</p>
      </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
        </ul>
        <button class="cart-button" onclick="location.href='checkout.php'">Cart (<span
                id="cart-count">0</span>)</button>
    </nav>
</head>
<body>
    <<div class="main-content">
    <div class="main-content image">
      <div class="custom image"><img src="assets/croCover.jpg"></div>
    </div>
    <h1> Variant</h2>
    <div class="products">
      <div class="product-mac">
        <img src="assets/croChoAlm.jpeg" alt="Croissant">
        <h2>Chocolate Almond</h2>
        <p>Rp. 25.000</p>
      </div>
      <div class="product-mac">
        <img src="assets/croMatcha.jpg" alt="Croissant">
        <h2>Matcha</h2>
        <p>Rp. 25.000</p>
      </div>
      <div class="product-mac">
        <img src="assets/croStrawVanilla.jpeg" alt="Croissant">
        <h2>Strawberry Vaniila</h2>
        <p>Rp. 25.000</p>
      </div>
      <div class="product-mac">
        <img src="assets/croVanilla.jpeg" alt="Croissant">
        <h2>Vanilla</h2>
        <p>Rp. 25.000</p>
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