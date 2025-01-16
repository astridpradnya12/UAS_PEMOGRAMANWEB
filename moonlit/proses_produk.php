<?php
include 'admin_proses.php';

// CREATE
if (isset($_POST['create'])) {
    $nama_produk = $_POST['nama_produk']; 
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produk (nama_produk,deskripsi, qty,harga) VALUES ('$nama_produk', '$deskripsi','$qty','$harga')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// UPDATE
if (isset($_POST['update'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "UPDATE produk SET nama_produk='$nama_produk', deskripsi='$deskripsi', qty='$qty', harga='$harga' WHERE id_produk=$id_produk";
    if ($conn->query($sql) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM produk WHERE id_produk=$id_produk";
    if ($conn->query($sql) === TRUE) {
        header("Location: produk.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// EDIT (Untuk mendapatkan data user saat mengedit)
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $result = $conn->query("SELECT * FROM produk WHERE id_produk=$id_produk");
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
        <form action="proses.php" method="POST">
            <input type="hidden" name="id_produk" value="<?= $row['id_produk'] ?>">
            <label for="nama">nama produk:</label>
            <input type="text" name="nama_produk" value="<?= $row['nama_produk'] ?>" required><br>
            <label for="nama">deskripsi:</label>
            <input type="text" name="deskripsi" value="<?= $row['deskripsi'] ?>" required><br>
            <label for="email">qty:</label>
            <input type="text" name="qty" value="<?= $row['qty'] ?>" required><br>
            <label for="email">harga:</label>
            <input type="text" name="harga" value="<?= $row['harga'] ?>" required><br>
            <button type="submit" name="update">Update</button>
        </form>
        <a href="admin.php">Kembali</a>
    </body>
    </html>
    <?php
}
?>
