<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moonlit Bakery</title>
  <link rel="icon" type="image/x-icon" href="logo.png">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="header">
    <div class="header-container">
    <img src="assets/LOGO.png" alt="Moonlit Bakery Logo" class="logo">
    </div>
    <div class="header-right">
    <a href="index.php">Home</a>
      <a href="menu.php">Menu</a>
      <a href="login.php">Login</a>
      <a href="daftar.php">Daftar</a>
    </div>
  </div>

<script src="script.js".js></script>


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

  <form id="formmember" method="post" action="validate_daftar.php">
  <label for="email">Nama</label>
  <input type="text" id="email" name="nama" required>
  <label for="email">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <label for="role" hidden>role</label>
      <input type="text" id="role" name="role" value="pelanggan" hidden>

      <button type="submit">Daftar</button>
  </form>
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