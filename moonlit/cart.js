function add_to_cart(id_produk) {
    // Kirim permintaan ke server (PHP)
    fetch('add_to_cart.php', {
        method: 'POST', 
        body:
JSON.stringify({ id_produk: id_produk })
    })
    .then(response => response.json())
    .then(data => {
        // Ttampilkan pesan sukses atau gagal 
        console.log(data.message);
    })
    .catch(error => {
        console.error('Error:', error);
    }) ;
}