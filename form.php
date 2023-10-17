<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Kode untuk mengirim email di sini (gunakan fungsi mail() atau pustaka PHPMailer)

    // Setelah email terkirim, arahkan pengguna kembali ke halaman utama
    header("Location: index.php"); // Mengganti "index.html" dengan "index.php" karena kita sekarang berada di file PHP.
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Kirim Email</title>
</head>
<body>
    <form action="index.php" method="post"> <!-- Mengganti "proses_form.php" dengan "index.php" karena kita berada di halaman yang sama sekarang. -->
        <label for="to">Tujuan:</label>
        <input type="email" name="to" id="to" required><br>

        <label for="subject">Subjek:</label>
        <input type="text" name="subject" id="subject" required><br>

        <label for="message">Pesan:</label>
        <textarea name="message" id="message" rows="4" required></textarea><br>

        <input type="submit" value="Kirim Email">
    </form>
</body>
</html>
