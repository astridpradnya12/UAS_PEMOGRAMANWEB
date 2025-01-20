<?php  include 'koneksi_produk.php';

$productId = $_POSTI 'productid' ];
// Simpan data ke tabel keranjang belanja
$sql = "INSERT INTO cart (product_id,user_id) VALUES ('$productId', 1)";

// Ganti 1 dengan ID user jika sudah ada sistem login
    if (Sconn->query (sql) === TRUE) {echo json encode ([ 'message' =>'Product added to cart']);} 
    else {echo json_encode ([ 'message' =>'Error adding product' ]) ;}

$conn-›close () ;
?>