<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simpan pesan atau kirim email (menggunakan mail() atau database)
    echo "Pesan Anda telah diterima, terima kasih, $name!";
}
?>
