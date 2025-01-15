<?php
include 'admin_proses.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['id produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produk (id_produk,nama_produk, deskripsi, qty, harga ) VALUES ('$id_produk','$nama_produk', '$deskripsi', '$qty','$harga')";
    $conn->query($sql);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scal
    <title>Moonlit Bakery</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
   <div class="header">
   <div class="header-container">
     <h1>Admin</h1>
   </div>
   <div class="header-right">
   <a href="logout.php">Logout</a>
   </div>
   </div class="main-content">
   <link rel="stylesheet" type="text/css" href="style.css" />
<body>
    <form action="proses_produk.php" method="post">
        <label for="id_produk">Id Produk:</label>
        <input type="text" name="id_produk" id="id_produk" value="<?= htmlspecialchars($_POST['id_produk'] ?? '') ?>"><br><br>

        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" value="<?= htmlspecialchars($_POST['nama_produk'] ?? '') ?>"><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea name="deskripsi" id="deskripsi"><?= htmlspecialchars($_POST['deskripsi'] ?? '') ?></textarea><br><br>

        <label for="qty">Qty:</label>
        <input type="number" name="qty" id="qty" value="<?= htmlspecialchars($_POST['qty'] ?? '') ?>"><br><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="<?= htmlspecialchars($_POST['harga'] ?? '') ?>"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
