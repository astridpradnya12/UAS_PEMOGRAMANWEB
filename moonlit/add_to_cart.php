<?php
include 'koneksi_produk.php'; // Pastikan file koneksi_produk.php sudah benar dan terhubung ke database

if (!isset($_POST['productid']) || empty($_POST['productid'])) {
    echo json_encode(['message' => 'Product ID is required']);
    exit; // Menghentikan eksekusi jika validasi gagal
}

// Ambil data dari request
$productId = $_POST['productid']; // Perbaikan sintaks: $_POST['productid']

// Simpan data ke tabel keranjang belanja
$sql = "INSERT INTO cart (product_id, user_id) VALUES ('$productId', 1)";

// Ganti 1 dengan ID user jika sudah ada sistem login
if ($conn->query($sql) === TRUE) { // Perbaikan variabel dan fungsi
    echo json_encode(['message' => 'Product added to cart']);
} else {
    echo json_encode(['message' => 'Error adding product', 'error' => $conn->error]); // Tambahkan detail error
}

// Tutup koneksi
$conn->close();