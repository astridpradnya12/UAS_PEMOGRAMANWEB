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
        <h1>Macaroon</h1>
        <p>Savor the Sweetness, One Macaron at a Time</p>
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
  <div class="main-content">
    <div class="main-content image">
      <div class="custom image"><img src="assets/macCover.jpg"></div>
    </div>
    <h1> Variant</h2>
    <div class="products">
      <div class="product-mac">
        <img src="assets/macCoklat.jpeg" alt="Macaroon">
        <h2>Chocolate</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="productid" value="1101">
            <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/macBlueberry.jpeg" alt="Macaroon">
        <h2>Blueberry</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="productid" value="1102">
          <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/macLemon.jpeg" alt="Macaroon">
        <h2>Lemon</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="productid" value="1103">
          <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/macMatcha.jpeg" alt="Macaroon">
        <h2>Matcha</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="productid" value="1104">
          <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      
      <div class="product-mac">
        <img src="assets/macOrange.jpeg" alt="Macaroon">
        <h2>Orange</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="productid" value="1105">
          <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/macStrawbery.jpeg" alt="Macaroon">
        <h2>Strawberry</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
           <input type="hidden" name="productid" value="1106">
           <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/macTaro.jpeg" alt="Macaroon">
        <h2>Taro</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="productid" value="1107">
          <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/macVanilla.jpeg" alt="Macaroon">
        <h2>Vanilla</h2>
        <p>Rp. 16.000</p>
        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="productid" value="1108">
            <input type="number" name="qty" value="1" />
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
    </div>
  </div>
</body>
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