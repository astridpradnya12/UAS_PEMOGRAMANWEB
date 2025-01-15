<?php
include 'admin_proses.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO produk (nama_produk, harga, deskripsi) VALUES ('$nama_produk', '$harga', '$deskripsi')";
    $conn->query($sql);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <form method="POST">
        <label>Nama Produk: <input type="text" name="nama_produk" required></label><br>
        <label>Harga: <input type="number" name="harga" required></label><br>
        <label>Deskripsi: <textarea name="deskripsi"></textarea></label><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
