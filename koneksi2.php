<?php
$host = "localhost"; // Nama hostnya
$user = "root"; // Username
$pass = ""; // Password (Isi jika menggunakan password)
$connect = mysqli_connect($host, $user, $pass, "tekpro2"); // Koneksi ke MySQL



function cari($keyword) {
    $query = "SELECT * FROM gambar WHERE nama LIKE '$keyword' ";
    // return query($query);
}
?>

