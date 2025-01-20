<?php include 'admin_proses.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moonlit Bakery</title>
  <link rel="icon" type="image/x-icon" href="assets/logo.png">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="header">
    <div class="header-container h1">
      <h1>Admin</h1>
      <link rel="stylesheet" type="text/css" href="stylee.css" />
    </div>
    <div class="header-right">
    <a href="logout.php">Logout</a>
    </div>
  </div>
  <div class="main-content">
    <button> <a href="tambah_produk.php">Tambah</a></button>
  <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama produk</th>
            <th>deskripsi</th>
            <th>qty</th>
            <th>harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM produk");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id_produk']}</td>
                <td>{$row['nama_produk']}</td>
                <td>{$row['deskripsi']}</td>
                <td>{$row['qty']}</td>
                <td>{$row['harga']}</td>
                <td>
                    <a href='proses_produk.php?edit={$row['id_produk']}'>Edit</a>
                    <a href='proses_produk.php?delete={$row['id_produk']}' onclick='return confirm(\"Yakin ingin menghapus?\");'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
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