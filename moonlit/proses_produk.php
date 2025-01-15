<?php
include 'admin_proses.php';

# CREATE
if (isset['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['id produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produk (id_produk,nama_produk, deskripsi, qty, harga ) VALUES ('$id_produk','$nama_pro
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk = $_POST['id produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    
    $sql = "UPDATE produk SET id_produk= '$id_produk',nama_produk = '$nama_produk', deskripsi = '$deskripsi, qty = 'qty', harga = '$harga',  WHERE id = $id";
    $conn->query($sql);

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial
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
<body>
    <h1>Edit Produk</h1>
    <form method="POST">
        <label>Id Produk: <input type="text" name="id_produk" value="<?= $data['id_produk'] ?>" required></label><br>
        <label>Nama Produk: <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" required></label><br>
        <label>Deskripsi: <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea></label><br>
        <label>Qty: <input type="number" name="qty" value="<?= $data['qty'] ?>" required></label><br>
        <label>Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>" required></label><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
