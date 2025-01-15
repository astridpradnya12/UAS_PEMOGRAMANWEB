if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus produk
    $hapus_query = "DELETE FROM produk WHERE id = ?";
    $stmt = $conn->prepare($hapus_query);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "<script>alert('Produk berhasil dihapus!');</script>";
        echo "<script>window.location='produk.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus produk.');</script>";
    }
    $stmt->close();
}