<?php
include 'admin_proses.php';

# CREATE
if (isset($_POST['create'])) {
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

# UPDATE
if (isset($_POST['update'])) {
    $id_produk = $_POST['id produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "UPDATE produk SET id_produk='$id_produk', nama_produk='$nama_produk', deskripsi='$deskripsi', qty='$qty', harga='$harga' 
    if ($conn->query($sql) === TRUE) {
        header("Location: produk.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

# DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: produk.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

# EDIT
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $result = $conn->query("SELECT * FROM produk WHERE id=$id");
    $row = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data</title>
    </head>
    <body>
        <h2>Edit Data</h2>
        <form action="proses_produk.php" method="POST">
            <input type="hidden" name="id_produk" value="<?= $row['id_produk'] ?>">
            <label for="nama">Nama Produk:</label>
            <input type="text" name="nama_produk" value="<?= $row['nama_produk'] ?>" required><br>
            <label for="nama">Deskripsi:</label>
            <input type="text" name="deskripsi" value="<?= $row['deskripsi'] ?>" required><br>
            <label for="email">Qty:</label>
            <input type="email" name="qty" value="<?= $row['qty'] ?>" required><br>
            <label for="email">Harga:</label>
            <input type="text" name="harga" value="<?= $row['harga'] ?>" required><br>
            <button type="submit" name="update">Update</button>
        </form>
        <a href="produk.php">Kembali</a>
    </body>
    </html>
    <?php
}
?>