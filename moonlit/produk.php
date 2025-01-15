<?php
include 'admin_proses.php';

// Ambil data produk
$query = "SELECT * FROM produk";
$result = $conn->query($query);

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
        <button> <a href="tambah_produk.php">Tambah Produk</a></button>
        <link rel="stylesheet" type="text/css" href="stylee.css" />
    <table border="1">
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Update</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id_produk']) ?></td>
                    <td><?= htmlspecialchars($row['nama_produk']) ?></td>
                    <td><?= htmlspecialchars($row['deskripsi']) ?></td>
                    <td><?= htmlspecialchars($row['qty']) ?></td>
                    <td><?= htmlspecialchars($row['harga']) ?></td>
                    <td>
                        <a href="edit_produk.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="produk.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Tidak ada data produk.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
