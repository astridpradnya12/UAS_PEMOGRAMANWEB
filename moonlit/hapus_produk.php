<?php
include 'admin_proses.php';

$id = $_GET['id'];
$conn->query("DELETE FROM produk WHERE id = $id");

header('Location: index.php');
exit;
?>
