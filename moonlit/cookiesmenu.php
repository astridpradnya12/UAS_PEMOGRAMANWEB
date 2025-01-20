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
        <h1>Cookies</h1>
        <p>Cookie Cravings? We've Got You Covered!</p>
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
      <div class="custom image"><img src="assets/cookCover.jpg"></div>
    </div>
    <form method="POST" action="add_to_cart.php">
    <select name="product_id" id="product_id">
          <?php
            // Koneksi ke database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "moonlit";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Periksa koneksi
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Ambil data produk
            $query = "SELECT * FROM produk";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . " (Stock: " . $row['stock'] . ")</option>";
                }
            }

            // Tutup koneksi
            $conn->close();
            ?>
        </select>
    <h1> Variant</h2>
    <div class="products">
      <div class="product-mac">
        <img src="assets/cookChoco.jpeg" alt="Cookie">
        <h2>Chocolate</h2>
        <p>Rp. 18.000</p>
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/cookMatcha.jpeg" alt="Cookie">
        <h2>Matcha</h2>
        <p>Rp. 18.000</p>
        <button class="add-to-cart-button">Add to Cart</button>
      </div>
      <div class="product-mac">
        <img src="assets/cookOri.jpeg" alt="Cookie">
        <h2>Original</h2>
        <p>Rp. 18.000</p>
        <button class="add-to-cart-button">Add to Cart</button>
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