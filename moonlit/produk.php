<?php
include 'admin_proses.php';

// Ambil data produk
$result = $conn->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   <link rel="stylesheet" type="text/css" href="stylee.css" />
    <table border="1">
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Qty</th>
            <th>Harga</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id_produk'] ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['qty'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td>
                <a href="edit_produk.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="hapus_produk.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
