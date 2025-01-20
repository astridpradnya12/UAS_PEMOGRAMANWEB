<?php  include 'koneksi_produk.php';

// Proses tombol "Add to Cart"
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Ambil data produk dari database
    $query = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        // Periksa stok
        if ($product['stock'] > 0) {
            // Kurangi stok produk
            $new_stock = $product['stock'] - 1;
            $update_query = "UPDATE products SET stock = ? WHERE id = ?";
            $update_stmt = $conn->prepare($update_query);
            $update_stmt->bind_param("ii", $new_stock, $product_id);
            $update_stmt->execute();

            echo "Product added to cart successfully!";
        } else {
            echo "Product is out of stock!";
        }
    } else {
        echo "Product not found!";
    }
}

// Tutup koneksi
$conn->close();
?>
