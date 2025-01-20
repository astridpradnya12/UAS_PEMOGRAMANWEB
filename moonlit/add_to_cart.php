<?php
session_start();  // Memulai sesi

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moonlit";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form atau sesi
$product_id = isset($_POST['productid']) ? $_POST['productid'] : null; // Pastikan product_id ada
$qty = isset($_POST['qty']) ? $_POST['qty'] : 1;  // Default ke 1 jika qty tidak ada
$user_id = isset($_SESSION['users']) ? $_SESSION['users'] : null;  // Pastikan user_id ada

// Periksa apakah data yang diperlukan ada
if ($productid === null || $user_id === null) {
    echo "ID produk atau ID pengguna tidak valid.";
    exit;
}

// Periksa apakah produk sudah ada dalam keranjang
$sql_check = "SELECT * FROM cart WHERE productid = ? AND user= ?";
$stmt = $conn->prepare($sql_check);
$stmt->bind_param("ii", $productid, $users);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Jika produk sudah ada dalam keranjang, update jumlahnya
    $sql_update = "UPDATE cart SET quantity = qty + ? WHERE productid = ? AND users= ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("iii", $qty, $productid, $users);
    $stmt->execute();
    echo "Produk sudah ada dalam keranjang. Jumlah diperbarui.";
} else {
    // Jika produk belum ada dalam keranjang, masukkan produk baru
    $sql_insert = "INSERT INTO cart (productid, qty, users) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bind_param("iii", $productid, $qty, $users);
    if ($stmt->execute()) {
        echo "Produk berhasil ditambahkan ke keranjang.";
    } else {
        echo "Terjadi kesalahan saat menambahkan produk ke keranjang: " . $stmt->error;
    }
}

// Tutup koneksi
$stmt->close();
$conn->close();
?>