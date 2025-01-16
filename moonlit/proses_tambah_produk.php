<?php

session_start();

// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "moonlit";

$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk']; 
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produk (nama_produk,deskripsi, qty,harga) VALUES ('$nama_produk', '$deskripsi','$qty','$harga')";
    if ($conn->query($sql) === TRUE) {
        header("Location: produk.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>